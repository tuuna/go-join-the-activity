<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','confirmation_token',
        'pic','is_active','api_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function FollowSponsors()
    {
        return $this->belongsToMany(Sponsor::class,'sponsor_user','user_id','sponsor_id');
    }

    public function followThisSponsor($sponsor)
    {
        return $this->FollowSponsors()->toggle($sponsor);
    }

    public function hasFollowed($sponsor)
    {
        return  $this->FollowSponsors()->where('sponsor_id',$sponsor)->count();
    }

}
