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
    $router->get('sponapp','SponsorApplyController@index');
    $router->post('apply/{id}','SponsorApplyController@pass');
});
