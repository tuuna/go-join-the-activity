<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedBackController extends Controller
{
    public function index($id)
    {
        return view('feedback.index',['id' => $id]);
    }
}
