<?php

namespace App\Http\Controllers;

use App\Repositories\SponsorInfoRepository;
use Illuminate\Http\Request;

class SponsorInfoController extends Controller
{
    protected $sponsorInfo;

    public function __construct(SponsorInfoRepository $sponsorInfo)
    {
        $this->sponsorInfo = $sponsorInfo;
    }

    public function index($id)
    {
        $sponsorInfo = $this->sponsorInfo->getCertainSponsorInfo($id);
        return view('sponsorInfo.index',compact('sponsorInfo'));
    }
}
