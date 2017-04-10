<?php

namespace App\Admin\Controllers;

use App\Activity;

use App\Category;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class AdminActivityController extends Controller
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

            $content->header('所有活动管理');
            $content->description('所有活动号活动管理');

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

            $content->header('活动修改');
            $content->description('活动修改页面');

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
        return Admin::grid(Activity::class, function (Grid $grid) {
            $grid->model()->orderBy('hold_time','DESC');
            $grid->id('ID')->sortable();
            $grid->disableCreation();
            $grid->column('title','活动标题');
            $grid->column('hold_time','举办时间');
            $grid->column('hold_address','活动时间');
            $grid->category()->title('所属分类');
            $grid->created_at();
            $grid->updated_at();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Activity::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->multipleSelect('othersponsors','协助举办方')
                ->ajax('/api/othersponsor','id','sponsor_name')
                ->placeholder('若没有结果请先申请活动号再试，此处可为空');
            $form->select('category_id','所属分类')->options(function () {
                foreach (Category::get() as $key => $cate) {
                    $merge[$key+1] = $cate->title;
                }
                return $merge;
            });
            $form->text('title','活动标题');
            $form->image('pic','活动图片');
            $form->text('hold_time','活动时间');
            $form->text('hold_address','活动地址');
            $form->text('contain_count','活动容纳人数');
            $form->textarea('activity_background','活动背景介绍');
            $form->textarea('guest_intro','活动嘉宾介绍');
            $form->editor('activity_agenda','活动议程安排');
            $form->tags('tags','活动标签')
                ->ajax('/api/tag','id','name')
                ->placeholder('输入活动标签');
        });
    }
}
