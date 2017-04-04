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


}
