<?php
/**
 * Created by PhpStorm.
 * User: tuuna
 * Date: 17-4-4
 * Time: 下午12:36
 */

namespace App\Repositories;


use App\User;
use Illuminate\Support\Facades\Auth;

class MyInfoRepository
{
    public function getMyInfo()
    {
        return User::find(Auth::user()->id)
                        ->first(['id','name','pic','signature','nickname','email']);
    }

    public function updateImg(Request $request,$fileName)
    {
        /*$filePath = 'upload'.'/sponsorUpload'.'/sponsor_'.Auth::id();
        unlink($filePath);*/
        return $request->file($fileName)->store('user_'.Auth::id(),'upload');
    }

    public function updateMyInfo(Request $request,$fileName)
    {
        return User::where('id',Auth::id())->update([
            'pic' => $this->updateImg($request,$fileName),
            'nickname' => $request->get('nickname'),
            'signature' => $request->get('signature')
        ]);
    }
}