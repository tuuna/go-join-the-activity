<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
        'user_id','sponsor_id','category_id',
        'title','pic','hold_time','contain_count',
        'activity_background','guest_intro',
        'activity_agenda'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
