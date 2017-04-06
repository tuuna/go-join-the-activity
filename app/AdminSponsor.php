<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminSponsor extends Model
{
    protected $table = 'admin_users';

    protected $fillable = [
      'username','email','name','password','avatar'
    ];

}
