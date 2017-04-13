<?php

namespace App\Http\Controllers;

use App\Sponsor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowSponsorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function followStatus(Request $request)
    {
            $user = Auth::guard('api')->user();
            $followed = $user->hasFollowed($request->get('sponsor'));
            if($followed) {
                return response()->json(['followed' => true]);
            }
            return response()->json(['followed' => false]);
    }

    public function follow(Request $request)
    {
        $user = Auth::guard('api')->user();
        $sponsor = Sponsor::find($request->get('sponsor'));
        $followed = $user->followThisSponsor($sponsor->id);
        if(count($followed['detached']) > 0) {
            $sponsor->decrement('follow_count');
            return response()->json(['followed' => false]);
        }
        $sponsor->increment('follow_count');
        return response()->json(['followed' => true]);
    }
}
