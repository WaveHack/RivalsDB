<?php

use Illuminate\Routing\Router;

/** @var Router $router */

$router->get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

$router->group(['middleware' => 'verified'], function (Router $router) {

    $router->get('/home', 'HomeController@index')->name('home');

});
