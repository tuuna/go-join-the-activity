<?php

use Illuminate\Routing\Router;

Admin::registerHelpersRoutes();

Route::group([
    'prefix'        => config('admin.prefix'),
    'namespace'     => Admin::controllerNamespace(),
    'middleware'    => ['web', 'admin'],
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('category',CategoryController::class);
    $router->resource('sponapp',SponsorApplyController::class);
    $router->get('apply/{id}','SponsorApplyController@pass');
    $router->get('detail/{id}','SponsorApplyController@detail');
    $router->get('deletesponsor/{id}','SponsorApplyController@deleteSponsor');
    $router->resource('sponinfoupdate', SponsorUpdateController::class);
    $router->resource('changepass', SponsorChangePassController::class);
    $router->resource('managesponsor', SponsorActivityController::class);
    $router->resource('acmanage', AdminActivityController::class);

});
