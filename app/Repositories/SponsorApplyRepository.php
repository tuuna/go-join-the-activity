<?php
namespace App\Repositories;

use App\Sponsor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SponsorApplyRepository
{
    public function create(array $attributes)
    {
        return Sponsor::create($attributes);
    }

    public function storeImage(Request $request,$fileName)
    {
//        $path = public_path('upload/sponsorUpload/').'sponsor_'.Auth::id();
//        dd(Image::make($request->file($fileName))->resize(300,300)->save($path));
        return $request->file($fileName)->store('sponsor_'.Auth::id(),'upload');
    }
}