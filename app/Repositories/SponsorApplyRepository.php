<?php
namespace App\Repositories;

use App\SponsorApply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class SponsorApplyRepository
{
    public function create(array $attributes)
    {
        return SponsorApply::create($attributes);
    }

    public function storeImage(Request $request,$fileName)
    {
//        $path = public_path('upload/sponsorUpload/').'sponsor_'.Auth::id();
//        dd(Image::make($request->file($fileName))->resize(300,300)->save($path));
        return $request->file($fileName)->store('sponsor_'.Auth::id(),'upload');
    }
}