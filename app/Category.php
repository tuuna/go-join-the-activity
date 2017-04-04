<?php

namespace App;

use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use ModelTree, AdminBuilder;

    protected $table = 'categories';

    protected $fillable = ['title','parent_id','order','level'];

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }

}
