<?php

use Illuminate\Routing\Router;

/** @var Router $router */

Auth::routes(['verify' => true]);

$router->get('/', 'HomeController@index')->name('home');

$router->group(['middleware' => 'verified'], function (Router $router) {
    //
});
