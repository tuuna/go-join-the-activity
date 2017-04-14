<?php

namespace App\Admin\Controllers;

use App\ActivityApply;

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
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid($sponsor)
    {
        return Admin::grid(ActivityApply::class, function (Grid $grid) use($sponsor){
            $grid->model()->where('sponsor_id',$sponsor);
            $grid->model()->orderBy('created_at');
            $grid->user()->
            $grid->column('name','姓名');
            $grid->column('email','邮件');
            $grid->column('phone_number','电话号码');
            $grid->created_at();
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
}
