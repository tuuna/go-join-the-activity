<?php

namespace App\Admin\Controllers;

use App\Sponsor;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Illuminate\Support\Facades\Auth;

class SponsorUpdateController extends Controller
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
        return Admin::content(function (Content $content) use ($sponsor_id) {
            if($sponsor_id) {
                $content->header('活动号资料修改');
                $content->description('修改活动号的基本资料');
                $content->body($this->grid($sponsor_id));
//                $content->body($this->form()->edit($sponsor_id));
            } else {
                $content->header('活动号资料修改');
                $content->description('管理员不能修改资料');
                $content->body('您不能修改活动号的信息');
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
     * @param $id
     * @return mixed
     */
    protected function grid($id)
    {
        return Admin::grid(Sponsor::class, function (Grid $grid) use($id) {
            $grid->model()->where('id',$id);
            $grid->disableCreation();
            $grid->disableExport();
            $grid->disablePagination();
            $grid->disableFilter();
            $grid->disableRowSelector();
            $grid->actions(function ($actions) {
                $actions->disableDelete();
            });
            $grid->column('sponsor_name','活动号名');
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
        return Admin::form(Sponsor::class, function (Form $form) {

//            $form->display('id', 'ID');
            $form->text('sponsor_name','活动号名');
            $form->image('sponsor_icon');
            $form->textarea('description','活动号描述');
            $form->text('website','活动号网站');
            $form->display('created_at', '创建时间');
        });
    }
}
