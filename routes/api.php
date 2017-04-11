<?php

use App\Sponsor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

Route::middleware('api')->get('/tag',
    function (Request $request) {
        $sponsors = Sponsor::select(['id','name'])
            ->where('name','like',
                '%'.$request->query('q').'%')
            ->get();
        return $sponsors;
    });

Route::middleware('api')->post('/sponsor/followers',
    function (Request $request) {
        $user = Auth::guard('api')->user();
        $followed = $user->hasFollowed($request->get('sponsor'));
        if($followed) {
            return response()->json(['followed' => true]);
        }
        return response()->json(['followed' => false]);
    });

Route::middleware('auth:api')->post('/sponsor/follow',function(Request $request) {
    $user = Auth::guard('api')->user();
    $sponsor = Sponsor::find($request->get('sponsor'));
    $followed = $user->followThisSponsor($sponsor->id);
    if(count($followed['detached']) > 0) {
        $sponsor->decrement('follow_count');
        return response()->json(['followed' => false]);
    }
    $sponsor->increment('follow_count');
    return response()->json(['followed' => true]);
});
