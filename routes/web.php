<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

/**
 * 首页
 */
Route::get('/','IndexController@index');
Route::get('/userLogout','IndexController@userLogout');
/**
 * 个人中心
 */
Route::get('/myinfo','MyInfoController@index');

/**
 * 活动详情页面
 */
Route::get('/detail/{id}','ActivityDetailController@index');

/**
 * 活动主页
 */
Route::get('/home', 'HomeController@index');

/**
 * 活动列表
 */
Route::get('/list','ActivityListController@index');

/**
 * 搜索结果页面
 */
Route::get('/result','ResultController@index');
Route::get('/noresult','NoResultController@index');

/**
 * 主办方列表
 * 主办方个人中心
 */
Route::get('/sponsorlist','SponsorListController@index');
Route::get('/sponsorinfo/{id}','SponsorInfoController@index');

/**
 * 发送邮件注册
 */

Route::get('email/verify/{token}',[
            'as' => 'email.verify',
            'uses' => 'EmailController@verify'
]);

/**
 * 活动号申请
 */

Route::post('sponsor/apply','SponsorApplyController@index');

/**
 * 活动申请
 */

Route::post('activity/apply/{id}','ActivityApplyController@index');

/**
 * 意见反馈
 */

Route::get('feedback/{id}','FeedBackController@index');

/**
 * 各分类对应活动列表
 */

Route::get('catelist/{id}','CateListDetailController@index');

/**
 * 话题页面
 */

Route::get('topic','TopicController@index');

