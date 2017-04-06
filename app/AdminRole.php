<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminRole extends Model
{
    protected $table = 'admin_role_users';

    protected $fillable = [
        'role_id','user_id'
    ];
    public $timestamps=false;
}
