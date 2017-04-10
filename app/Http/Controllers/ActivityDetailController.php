<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ActivityDetailRepository;

class ActivityDetailController extends Controller
{
    protected $activityDetail;
    
    public function __construct(ActivityDetailRepository $activityDetail)
    {
        $this->activityDetail = $activityDetail;
    }
    /**
     * 页面的基本显示以及页面数据的渲染
     */
    public function index($id)
    {
        $activityDetail = $this->activityDetail->getCertainActivity($id);
        return view('actvtDtl.index',compact('activityDetail'));
    }
}
