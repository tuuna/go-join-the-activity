<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityDetailController extends Controller
{
    /**
     * 页面的基本显示以及页面数据的渲染
     */
    public function index()
    {
        return view('actvtDtl.index');
    }
}
