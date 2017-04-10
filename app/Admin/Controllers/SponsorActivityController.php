<?php

namespace App\Admin\Controllers;

use App\Activity;

use App\Category;
use App\Sponsor;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Illuminate\Support\Facades\Auth;

class SponsorActivityController extends Controller
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
        return Admin::content(function (Content $content) use($sponsor_id){
            if($sponsor_id) {

                $content->header('活动发布');
                $content->description('活动发布页面');

                $content->body($this->grid($sponsor_id));
            } else {
                $content->header('活动发布');
                $content->description('管理员请移步所有活动管理来进行管理');
                $content->body('请移步所有活动管理来进行管理');
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

            $content->header('新增活动');
            $content->description('新增活动页面');

            $content->body($this->form());
        });
    }

    /**
     * @param $id
     * @return mixed
     */
    protected function grid($id)
    {
        return Admin::grid(Activity::class, function (Grid $grid) use($id){
            $grid->model()->where('sponsor_id',$id);
            $grid->model()->orderBy('hold_time','DESC');
            $grid->id('ID');
            $grid->column('title','活动标题');
            $grid->column('hold_address','活动地址');
            $grid->column('hold_time','举办时间');
            /*$grid->columns('othersponsors')->each(function ($arr) {
                return Sponsor::where('id',$arr)->first()->sponsor_name;
            });*/
            $grid->category()->title('所属分类');
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
        $sponsor_id = Sponsor::where('sponsor_name',Admin::user()->username)->first()->id;
        return Admin::form(Activity::class, function (Form $form) use($sponsor_id){

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
            $form->hidden('sponsor_id')->value($sponsor_id);
        });
    }
}
