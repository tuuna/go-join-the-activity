<?php

namespace App\Admin\Controllers;

use App\SponsorApply;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class SponsorApplyController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('活动号审核');
            $content->description('操作中点击左按钮审核通过');

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
    protected function grid()
    {
        return Admin::grid(SponsorApply::class, function (Grid $grid) {

            $grid->id('ID');
            $grid->column('sponsor_icon','活动号标')->display(function ($icon) {
                $mainPath = '/upload/sponsorUpload/'.$icon;
                return "<img src='$mainPath'  style='width: 300px;height: 300px;'/>";
            });
            $grid->column('sponsor_name','活动号名');
            $grid->column('contact_email','联系邮件');
            $grid->created_at('创建时间')->sortable();
            $grid->actions(function ($actions) {
                $actions->disableEdit();
                $checkPath = url('/apply/'.$actions->getKey());
                $actions->prepend("<a href='$checkPath'><i class='fa fa-paper-plane'></i></a>");
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
        return Admin::form(SponsorApply::class, function (Form $form) {

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
        SponsorApply::find($id)
            ->update([
            'has_passed' => 1
        ]);

        return back();
    }
}
