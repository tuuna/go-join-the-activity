<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OtherSponsor extends Model
{
    protected $table = 'activities';

    public function setOthersponsorsAttribute($options)
    {
        if (is_array($options)) {
            $this->attributes['options'] = join(',', $options);
        }
    }

    public function getOthersponsorsAttribute($options)
    {
        if (is_string($options)) {
            return explode(',', $options);
        }

        return $options;
    }
}
