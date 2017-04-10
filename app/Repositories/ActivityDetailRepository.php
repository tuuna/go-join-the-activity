<?php
namespace App\Repositories;

use App\Activity;

class ActivityDetailRepository
{

  public function getCertainActivity($id)
  {
     return Activity::where('id',$id)->first();
  }
  
}
