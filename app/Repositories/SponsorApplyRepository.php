<?php
namespace App\Repositories;

use App\SponsorApply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SponsorApplyRepository
{
    public function create(array $attributes)
    {
        return SponsorApply::create($attributes);
    }

    public function storeImage(Request $request,$fileName)
    {
        return $request->file($fileName)->store('sponsor_'.Auth::id(),'upload');
    }
}