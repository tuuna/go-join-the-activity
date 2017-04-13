<?php
/**
 * Created by PhpStorm.
 * User: tuuna
 * Date: 17-4-9
 * Time: 下午10:04
 */

namespace App\Repositories;


use App\Activity;
use App\Sponsor;

class SponsorInfoRepository
{

    public function getCertainSponsorInfo($id)
    {
        $activityCount = Activity::where('sponsor_id',$id)->count();
        $sponsorInfo = Sponsor::select([
            'sponsor_name','sponsor_icon','description',
            'weixin','follow_count','id'
        ])->where('id',$id)->first()->toArray();
        $sponsorInfo = array_add($sponsorInfo,'count',$activityCount);
        return $sponsorInfo;
    }

    public function getActivityInfo($id)
    {
        $activityInfo = Activity::select([
            'id','title','hold_time','hold_address','signUp_count','follow_count'
        ])->where('sponsor_id',$id)->get();
        return $activityInfo;
    }
}