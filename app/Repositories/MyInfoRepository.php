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
}