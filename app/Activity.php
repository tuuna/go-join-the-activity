<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Elasticquent\ElasticquentTrait;

class Activity extends Model
{
    use ElasticquentTrait;

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

    public function users()
    {
        return $this->belongsToMany(User::class,'activity_user');
    }

    public function apply()
    {
        return $this->belongsTo(ActivityApply::class);
    }

    public function sponsor()
    {
        return $this->belongsTo(Sponsor::class);
    }
}
