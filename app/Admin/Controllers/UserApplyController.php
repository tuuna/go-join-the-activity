<?php

namespace App\Admin\Controllers;

use App\ActivityApply;

use App\Mail\UserApplyMailer;
use App\Repositories\ActivityPassRepository;
use App\Sponsor;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Illuminate\Support\Facades\Auth;

class UserApplyController extends Controller
{
    use ModelForm;
    protected $activity;
    protected $mail;

    public function __construct(ActivityPassRepository $activity,
                                UserApplyMailer $mail)
    {
        $this->activity = $activity;
        $this->mail = $mail;
    }

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        $sponsor_id = is_null(Sponsor::where('sponsor_name',Admin::user()->username)->first()) ?
            0 : Sponsor::where('sponsor_name',Admin::user()->username)->first()->id;
        return Admin::content(function (Content $content) use($sponsor_id) {
            if ($sponsor_id) {

                $content->header('用户活动报名页面');
                $content->description('管理用户报名活动的情况');

                $content->body($this->grid($sponsor_id));
            } else {
                $content->header('用户活动报名页面');
                $content->description('管理用户报名活动的情况');
                $content->body('请移步所有活动申请管理来进行操作');
            }
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form());
        });
    }

    /**
     * @param $sponsor
     * @return mixed
     */
    protected function grid($sponsor)
    {
        return Admin::grid(ActivityApply::class, function (Grid $grid) use($sponsor){
            $grid->model()->where('sponsor_id',$sponsor);
            $grid->model()->where('has_passed','=',0);
            $grid->model()->orderBy('created_at');
            $grid->column('activity.title','活动名');
            $grid->column('name','报名者姓名');
            $grid->column('email','邮件');
            $grid->column('phone_number','电话号码');
            $grid->created_at('申请时间');
            $grid->actions(function ($actions) {
                $actions->disableEdit();
                $id = $actions->getKey();
                $email = ActivityApply::find($id)->first()->email;
                $activity = ActivityApply::find($id)->first()->activity_id;
                $checkPath = url('admin/activity/'.$activity.'/apply/check/'.$id.'/email/'.$email);
                $actions->prepend("<a href='$checkPath'><i class='fa fa-paper-plane'>通过</i></a>");
            });
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(ActivityApply::class, function (Form $form) {

            $form->display('id', 'ID');

            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }

    /**
     * @param $activity
     * @param $id
     * @param $email
     * @return \Illuminate\Http\RedirectResponse
     */
    public function pass($activity,$id,$email)
    {
        $this->activity->passTheActivity($id) ?
            flash('审核通过','success') :
            flash('审核失败，请重试','danger');
        $data = $this->activity->getActivityInfo($activity,$id,$email);
        $this->mail->sendActivityInfo($data);
        return back();
    }
}
