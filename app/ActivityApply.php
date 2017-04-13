<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityApply extends Model
{
    protected $table = 'activity_applies';

    protected $fillable = ['name','phone_number','email','student_number','sponsor_id'];
}
