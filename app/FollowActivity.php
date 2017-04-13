<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FollowActivity extends Model
{
    protected $table = 'activity_user';

    protected $fillable = ['user_id','activity_id'];

    public $timestamps = false;
}
