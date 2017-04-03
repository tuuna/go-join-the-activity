<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoResultController extends Controller
{
    public function index()
    {
        return view('checkNoInfo.index');
    }
}
