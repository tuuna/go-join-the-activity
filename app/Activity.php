<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
        'category_id','sponsor_id',
        'title','pic','hold_time','contain_count',
        'activity_background','guest_intro',
        'activity_agenda','othersponsors'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function setOthersponsorsAttribute($othersponsors)
    {
        if (is_array($othersponsors)) {
            $this->attributes['othersponsors'] = join(',', $othersponsors);
        }
    }

    public function getOthersponsorsAttribute($othersponsors)
    {
        if (is_string($othersponsors)) {
            return explode(',', $othersponsors);
        }

        return $othersponsors;
    }

    public function setTagsAttribute($tags)
    {
        if (is_array($tags)) {
            $this->attributes['tags'] = join(',', $tags);
        }
    }

    public function getTagsAttribute($tags)
    {
        if (is_string($tags)) {
            return explode(',', $tags);
        }

        return $tags;
    }
}
