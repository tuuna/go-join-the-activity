<?php

namespace App\Admin\Controllers;

use App\ActivityApply;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class AdminActivityCalculateController extends Controller
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

            $content->header('活动情况管理');
            $content->description('所有活动情况的管理');

            $content->body($this->grid());
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
    protected function grid()
    {


            $allCount = ActivityApply::all()->count();
            $count = ActivityApply::where('has_passed',0)->count();
            $has_passed_count = $allCount - $count;
            return Admin::grid(ActivityApply::class, function (Grid $grid) use($has_passed_count,$count) {
                $grid->model()->orderBy('created_at');
                $grid->id('ID')->sortable();
                $grid->column('activity.title','活动名');
                $grid->column('sponsor.sponsor_name','活动号');
                $grid->column('has_passed_count','已通过的报名人数')->display( function () use($has_passed_count){
                    return $has_passed_count;
                });
                $grid->column('has_not_passed_count','未审核的报名人数')->display(function() use($count){
                    return $count;
                });
                $grid->created_at();
                $grid->disableCreation();
                $grid->disableExport();
                $grid->disableFilter();
                $grid->disableActions();
                $grid->disableRowSelector();
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
