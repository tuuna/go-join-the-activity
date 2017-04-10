<?php
namespace App\Repositories;

use App\Activity;
use App\Sponsor;
use App\Category;

class ActivityDetailRepository
{

  public function getCertainActivity($id)
  {
      $activity = Activity::with('category')->where('id',$id)->first()->toArray();
      $mainSponsor = $this->getActivityInfo($activity['sponsor_id']);
     if(count($activity['othersponsors']) && $activity['othersponsors'][0] != null) {
         foreach($activity['othersponsors'] as $key => $item) {
             $otherSponsor[$key] = $this->getActivityInfo($item);
         }
     } else {
         $otherSponsor[0] = null;
     }

     $activity = array_add($activity,'main_sponsor',$mainSponsor);
     $activity = array_add($activity,'other_sponsor_name',$otherSponsor);

     return $activity;
  }

  public function getActivityInfo($sponsor_id)
  {
      return Sponsor::select(['id','sponsor_name','sponsor_icon'])
                      ->where('id',$sponsor_id)
                      ->first()
                      ->toArray();
  }

}
