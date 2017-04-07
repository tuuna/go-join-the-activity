<?php
/**
 * Created by PhpStorm.
 * User: tuuna
 * Date: 17-4-6
 * Time: 下午1:58
 */

namespace App\Repositories;


use App\AdminRole;
use App\AdminSponsor;
use App\Sponsor;

class SponsorPassRepository
{
    public function getInfo($id)
    {
        return Sponsor::where('id', $id)->first();
    }

    public function create(array $attributes)
    {
        return AdminSponsor::create($attributes);
    }

    public function changeRole($id)
    {
        AdminRole::insert(['role_id' => 2,'user_id' => $id]);
    }

    public function passTheSponsor($id)
    {
        return  Sponsor::find($id)->update(['has_passed' => 1]);
    }

    public function failToPassSponsor($id)
    {
        $icon_path = Sponsor::find($id)->first()->sponsor_icon;
        $card_path = Sponsor::find($id)->first()->e_card;
        $iconPath = 'upload/sponsorUpload/'.$icon_path;
        $cardPath = 'upload/sponsorUpload/'.$card_path;
        if(Sponsor::find($id)->delete()
            && unlink($iconPath)
            && unlink($cardPath)
        ) {
            return true;
        }
        return false;
    }

    public function getSponsorInfo($id)
    {
        $username = $this->getInfo($id)->sponsor_name;
        $password = $this->getInfo($id)->password;
        $email = $this->getInfo($id)->contact_email;
        $data = ['username' => $username,'password' => $password,'email' => $email];
        return $data;
    }

    public function completeApply($id)
    {
        $data = $this->getInfo($id);
        $user = $this->create([
            'username' => $data->sponsor_name,
            'password' => bcrypt($data->password),
            'email' => $data->contact_email,
            'name' => 'Sponsor',
            'avatar' => $data->sponsor_icon
        ]);

        $this->changeRole($user->id);

        return $this->getSponsorInfo($id);

    }

    public function failToApplyInfo($id)
    {
        return $data = [
            'name' => $this->getInfo($id)->sponsor_name,
            'email' => $this->getInfo($id)->contact_email
        ];
    }
}