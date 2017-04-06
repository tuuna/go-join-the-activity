<?php

namespace App\Admin\Controllers;

use App\Mail\SponsorApplyMailer;
use App\Repositories\SponsorPassRepository;
use App\Sponsor;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class SponsorApplyController extends Controller
{
    use ModelForm;

    protected $sponsor;
    protected $mail;

    public function __construct(SponsorPassRepository $sponsor,SponsorApplyMailer $mail)
    {
        $this->sponsor = $sponsor;
        $this->mail = $mail;
    }

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('活动号审核');
            $content->description('审核通过后相应审核数据自动消失');

            $content->body($this->grid());
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

            $content->header('活动号管理');
            $content->description('不支持活动号的添加');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Sponsor::class, function (Grid $grid) {
            $grid->model()->where('has_passed','=',0);
            $grid->model()->orderBy('created_at','DESC');
            $grid->id('ID');
            $grid->column('sponsor_icon','活动号标')->display(function ($icon) {
                $mainPath = '/upload/sponsorUpload/'.$icon;
                return "<img src='$mainPath'  style='width: 300px;height: 300px;'/>";
            });
            $grid->column('sponsor_name','活动号名');
            $grid->column('contact_email','联系邮件');
            $grid->created_at('创建时间');
            $grid->actions(function ($actions) {
                $actions->disableEdit();
                $actions->disableDelete();
                $id = $actions->getKey();
                $checkPath = url('admin/apply/'.$id);
                $detail = url('admin/detail/'.$id);
                $deletePath = url('admin/deletesponsor/'.$id);
                $actions->prepend("<a href='$detail'><i class='fa fa-eye'>详情</i></a>");
                $actions->prepend("<a href='$checkPath'><i class='fa fa-paper-plane'>通过</i></a>");
                $actions->append("<a href='$deletePath'><i class='fa fa-trash'>删除</i></a>");
            });
            $grid->disableCreation();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Sponsor::class, function (Form $form) {

            $form->display('id', 'ID');

            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function pass($id)
    {
        $this->sponsor->passTheSponsor($id) ?
            flash('审核通过','success') :
            flash('审核失败，请重试','danger');
        $data = $this->sponsor->completeApply($id);
        $this->mail->sendSponsorInfo($data);
        return redirect('admin/sponapp');
    }

    public function detail($id)
    {
        $detail = $this->sponsor->getInfo($id);
        return view('detail.index',compact('detail'));
    }

    public function deleteSponsor($id)
    {
        $data = $this->sponsor->failToApplyInfo($id);
        $this->sponsor->failToPassSponsor($id) ?
            flash('删除成功，该活动号审核失败','success') :
            flash('删除失败，请重试','danger');
        $this->mail->sendFailSponsorInfo($data);
        return redirect('admin/sponapp');
    }
}
