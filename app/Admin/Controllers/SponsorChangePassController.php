<?php

namespace App\Admin\Controllers;


use App\AdminSponsor;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class SponsorChangePassController extends Controller
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

            $content->header('修改密码');
            $content->description('请务必修改您的密码，以便于记忆');

            $content->body($this->grid(Admin::user()->id));
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
     * @param $id
     * @return mixed
     */
    protected function grid($id)
    {
        return Admin::grid(AdminSponsor::class, function (Grid $grid) use ($id){
            $grid->model()->where('id',$id);
            $grid->disableCreation();
            $grid->disableExport();
            $grid->disablePagination();
            $grid->disableFilter();
            $grid->disableRowSelector();
            $grid->actions(function ($actions) {
                $actions->disableDelete();
            });
            $grid->column('username','账号');
            $grid->updated_at('更新时间');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(AdminSponsor::class, function (Form $form) {
            $form->password('password')->placeholder('输入您要修改的密码');
            $form->saving(function (Form $form) {
                    $form->password = bcrypt($form->password);
            });
        });
    }
}
