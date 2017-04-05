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
    $router->post('apply/{id}','SponsorApplyController@pass');
    $router->get('detail/{id}','SponsorApplyController@detail');
});
