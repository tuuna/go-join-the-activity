<?php
/**
 * Created by PhpStorm.
 * User: tuuna
 * Date: 17-4-9
 * Time: 下午9:41
 */

namespace App\Repositories;


use App\Sponsor;

class SponsorListRepository
{
    public function getAllSponsors()
    {
        return Sponsor::select(['id','sponsor_name','sponsor_icon','follow_count'])
                        ->where('has_passed','=',1)
                        ->where('is_locked','=',0)
                        ->get();
    }
}