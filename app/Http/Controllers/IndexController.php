<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    /**
     * 页面的基本显示以及页面数据的渲染
     */
    public function index()
    {
        return view('home.index');
    }

    public function userLogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
