<?php

namespace App\Http\Controllers;

use App\Repositories\SponsorListRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SponsorListController extends Controller
{
    protected $sponsorListInfo;

    public function __construct(SponsorListRepository $sponsorListInfo)
    {
        $this->sponsorListInfo = $sponsorListInfo;
    }

    public function index()
    {
        $sponsorLists = $this->sponsorListInfo->getAllSponsors();
        return view('sponsorList.index',compact('sponsorLists'));
    }
}
