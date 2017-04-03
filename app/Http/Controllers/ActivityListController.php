<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityListController extends Controller
{
    public function index()
    {
        return view('actvtList.index');
    }
}
