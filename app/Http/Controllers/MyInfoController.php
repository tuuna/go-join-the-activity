<?php

namespace App\Http\Controllers;

use App\Repositories\MyInfoRepository;
use Illuminate\Http\Request;

class MyInfoController extends Controller
{
    protected $myInfo;

    /**
     * MyInfoController constructor.
     * @param MyInfoRepository $myInfo
     */
    public function __construct(MyInfoRepository $myInfo)
    {
        $this->middleware('auth');
        $this->myInfo = $myInfo;
    }

    /**
     * 页面的基本显示以及页面数据的渲染
     */
    public function index()
    {
        $myInfo = $this->myInfo->getMyInfo();
        return view('myInfo.index',compact('myInfo'));
    }

    public function updateInfo(Request $request)
    {
        $this->myInfo->updateMyInfo($request,'user_icon') ?
            flash('修改资料成功','success'):
            flash('修改资料失败，请重试','warning');
        return back();
    }


}
