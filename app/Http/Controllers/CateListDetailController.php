<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CateListDetailController extends Controller
{
    public function index($id)
    {
        return view('cateListDtl.index',['id' => $id]);
    }
}
