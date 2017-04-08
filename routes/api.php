<?php

use App\Sponsor;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('api')->get('/othersponsor',
    function (Request $request) {
        $sponsors = Sponsor::select(['id','sponsor_name'])
                    ->where('sponsor_name','like',
                        '%'.$request->query('q').'%')
                    ->get();
        return $sponsors;
    });
