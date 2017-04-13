<?php

namespace App\Http\Controllers;

use App\Repositories\FollowSponsorRepository;
use Illuminate\Http\Request;

class FollowSponsorController extends Controller
{
    protected $followSponsor;

    public function __construct(FollowSponsorRepository $followSponsor)
    {
        $this->middleware('auth');
        $this->followSponsor = $followSponsor;
    }

    public function followStatus(Request $request)
    {
            $user = $this->followSponsor->getCurrentUserInfo();
            $followed = $user->hasFollowed($request->get('sponsor'));
            if($followed) {
                $this->followSponsor->responseToClient(['followed' => true]);
            }
            $this->followSponsor->responseToClient(['followed' => false]);
    }

    public function follow(Request $request)
    {
        $user = $this->followSponsor->getCurrentUserInfo();
        $sponsor = $this->followSponsor->findCertainSponsor($request->get('sponsor'));
        $followed = $user->followThisSponsor($sponsor->id);
        if(count($followed['detached']) > 0) {
            $sponsor->decrement('follow_count');
            $this->followSponsor->responseToClient(['followed' => false]);
        }
        $sponsor->increment('follow_count');
        $this->followSponsor->responseToClient(['followed' => true]);
    }
}
