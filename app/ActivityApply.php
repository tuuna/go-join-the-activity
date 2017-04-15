<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityApply extends Model
{
    protected $table = 'activity_applies';

    protected $fillable = ['name','phone_number','email','student_number','sponsor_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }

    public function sponsor()
    {
        return $this->belongsTo(Sponsor::class);
    }
}
