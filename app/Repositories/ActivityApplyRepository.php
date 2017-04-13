<?php
/**
 * Created by PhpStorm.
 * User: tuuna
 * Date: 17-4-13
 * Time: 下午7:47
 */

namespace App\Repositories;


use App\ActivityApply;

class ActivityApplyRepository
{
    public function create($attributes)
    {
        return ActivityApply::create($attributes);
    }

}