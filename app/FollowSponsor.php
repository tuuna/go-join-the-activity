<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FollowSponsor extends Model
{
    protected $table = 'sponsor_user';

    protected $fillable = ['user_id','sponsor_id'];

    public $timestamps = false;
}
