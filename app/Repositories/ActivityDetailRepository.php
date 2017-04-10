<?php
namespace App\Repositories;

use App\Activity;
use App\Sponsor;
use App\Category;

class ActivityDetailRepository
{

  public function getCertainActivity($id)
  {
     $activity = Activity::with('category')->where('id',$id)->first()->asArray();
     $mainSponsor = Sponsor::select(['id','sponsor_name','sponsor_icon'])
                            ->where('id',$activity['sponsor_id'])
                            ->first()->asArray();
     return Activity::where('id',$id)->first();
  }
  
  public function getMainSponsor($id)
  {
    
  }
}
