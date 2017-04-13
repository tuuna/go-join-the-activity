<?php

namespace App\Http\Controllers;

use App\Repositories\FollowActivityRepository;
use Illuminate\Http\Request;

class FollowActivityController extends Controller
{
    protected $followActivity;

    public function __construct(FollowActivityRepository $followActivity)
    {
        $this->middleware('auth');
        $this->followActivity = $followActivity;
    }

    public function followStatus(Request $request)
    {
        $user = $this->followActivity->getCurrentUserInfo();
        $followed = $user->hasFollowedActivity($request->get('activity'));
        if($followed) {
            return $this->followActivity->responseToClient(['followed' => true]);
        }
        return $this->followActivity->responseToClient(['followed' => false]);
    }

    public function follow(Request $request)
    {
        $user = $this->followActivity->getCurrentUserInfo();
        $activity = $this->followActivity->findCertainActivity($request->get('activity'));
        $followed = $user->followThisActivity($activity->id);
        if(count($followed['detached']) > 0) {
            $activity->decrement('follow_count');
            return $this->followActivity->responseToClient(['followed' => false]);
        }
        $activity->increment('follow_count');
        return $this->followActivity->responseToClient(['followed' => true]);
    }
}
