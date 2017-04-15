<?php

namespace App\Http\Controllers;

use App\Repositories\ActivityApplyRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivityApplyController extends Controller
{
    protected $apply;

    public function __construct(ActivityApplyRepository $apply)
    {
        $this->middleware('auth');
        $this->apply = $apply;
    }

    public function index(Request $request,$id)
    {
        $this->apply->create([
            'name' => $request->get('name'),
            'phone_number' => $request->get('phone_number'),
            'email' => $request->get('email'),
            'student_number' => $request->get('student_number'),
            'sponsor_id' => $request->get('sponsor_id'),
            'user_id' => Auth::id(),
            'activity_id' => $id
        ]) ? flash('报名成功，请等待邮件通知','success') :
             flash('报名失败，请重试','warning');
        return back();
    }
}
