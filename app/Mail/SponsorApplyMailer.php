<?php
/**
 * Created by PhpStorm.
 * User: tuuna
 * Date: 17-4-5
 * Time: 下午7:52
 */

namespace App\Mail;


use Illuminate\Support\Facades\Auth;

class SponsorApplyMailer extends Mailer
{
    public function applyInfo($email)
    {
        $data = [
            'name' => Auth::user()->name
        ];
        $this->sendTo('emails.sponsorApply',$data,$email,'请等待审核');
    }
}