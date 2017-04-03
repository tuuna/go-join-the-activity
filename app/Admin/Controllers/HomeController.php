<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Widgets\Box;
use Encore\Admin\Widgets\Chart\Bar;
use Encore\Admin\Widgets\Chart\Doughnut;
use Encore\Admin\Widgets\Chart\Line;
use Encore\Admin\Widgets\Chart\Pie;
use Encore\Admin\Widgets\Chart\PolarArea;
use Encore\Admin\Widgets\Chart\Radar;
use Encore\Admin\Widgets\Collapse;
use Encore\Admin\Widgets\InfoBox;
use Encore\Admin\Widgets\Tab;
use Encore\Admin\Widgets\Table;

class HomeController extends Controller
{
    use ModelForm;
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('主页');
            $content->description('说明...');

            $content->row('活动行网站解释权由多火所有，如有问题请发邮件admin@duohuo.com');

            $headers = ['Id', '邮件', '用户名','上次登录时间', '状态'];

            $users = Admin::getOrderedUser();

            foreach ($users as $key => $item) {
                $status = $item->is_locked ? '锁定' : '可用';
                $rows[$key] = [$item->id,$item->email,$item->username,$item->updated_at,$status];
            }

            $content->row((new Box('最近登录', new Table($headers, $rows)))->style('info')->solid());
        });
    }
}
