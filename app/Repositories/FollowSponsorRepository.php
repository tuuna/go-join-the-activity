<?php
/**
 * Created by PhpStorm.
 * User: tuuna
 * Date: 17-4-13
 * Time: 下午2:45
 */

namespace App\Repositories;


use Illuminate\Support\Facades\Auth;

class FollowSponsorRepository
{
    public function getCurrentUserInfo()
    {
        return Auth::guard('api')->user();
    }

    public function responseToClient(array $status)
    {
        return response()->json($status);
    }

    public function findCertainSponsor($sponsor)
    {
        return Sponsor::find($sponsor);
    }
}