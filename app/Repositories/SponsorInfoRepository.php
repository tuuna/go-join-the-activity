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
            'weixin','follow_count'
        ])->where('id',$id)->first()->toArray();
        $sponsorInfo = array_add($sponsorInfo,'count',$activityCount);
        return $sponsorInfo;
    }
}