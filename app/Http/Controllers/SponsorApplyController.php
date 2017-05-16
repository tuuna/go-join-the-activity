<?php

namespace App\Http\Controllers;

use App\Mail\SponsorApplyMailer;
use App\Repositories\SponsorApplyRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SponsorApplyController extends Controller
{
    protected $sponsorApply;
    protected $mail;

    public function __construct(SponsorApplyRepository $sponsorApply,
                                                            SponsorApplyMailer $mail)
    {
        $this->middleware('auth');
        $this->sponsorApply = $sponsorApply;
        $this->mail = $mail;
    }

    public function index(Request $request)
    {
        if(!empty($request->all())) {
             $this->sponsorApply->create([
                'sponsor_icon' => $this->sponsorApply->storeImage($request,'sponsor_icon'),
                'e_card' => $this->sponsorApply->storeImage($request,'e_card'),
                 'password' => str_random(10),
                'sponsor_name' => $request->get('sponsor_name'),
                'contact_name' => $request->get('contact_name'),
                'project_class' => $request->get('project_class'),
                'contact_email' => $request->get('contact_email'),
                'contact_number' => $request->get('contact_number'),
                'student_number' => $request->get('student_number'),
                'description' => $request->get('description'),
                 'user_id' => Auth::id(),
                'website' => !is_null($request->get('website')) ? $request->get('website') : '',
            ]);
            flash('申请成功，请等待审核。我们绝对为您的个人资料保密。','success');
            return redirect('/myinfo');
        } else {
            flash('抱歉，数据错误','error');
        }

//        dd($request->all());
    }
}
