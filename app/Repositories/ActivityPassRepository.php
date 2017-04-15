<?php
/**
 * Created by PhpStorm.
 * User: tuuna
 * Date: 17-4-15
 * Time: 上午10:31
 */

namespace App\Repositories;


use App\Activity;
use App\ActivityApply;

class ActivityPassRepository
{
    public function getInfo($id)
    {
        return Activity::where('id', $id)->first();
    }

    public function passTheActivity($id)
    {
        return ActivityApply::where('id',$id)->update(['has_passed' => 1]);
    }

    public function getUserInfo($id)
    {
        return ActivityApply::find($id)->first()->name;
    }

    public function getActivityInfo($activity,$id,$email)
    {
        $name = $this->getUserInfo($id);
        $activity_title = $this->getInfo($activity)->title;
        $hold_address = $this->getInfo($activity)->hold_address;
        $hold_time = $this->getInfo($activity)->hold_time;
        $data = ['name' => $name,'id' => $activity,'activity_title' => $activity_title,'hold_address' => $hold_address,'hold_time' => $hold_time,'email' => $email];
        return $data;
    }
}