<?php

use App\Http\Controllers\Database\FactionsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use Illuminate\Routing\Router;

/** @var Router $router */

// Authentication routes
Auth::routes(['verify' => true]);

// Search
$router->get('search', [SearchController::class, 'index'])->name('search');

// Home
$router->get('/', [HomeController::class, 'index'])->name('home');

// News
//$router->get('news', [NewsController::class, 'index'])->name('news');

// Database
$router->group(['prefix' => 'database', 'as' => 'database.'], function (Router $router) {

    // commanders

    $router->get('factions', [FactionsController::class, 'index'])->name('factions');
    //$router->get('database/factions', 'FactionController@index')->name('factions');
    //$router->get('database/factions/{slug}', 'FactionController@show')->name('factions.show');

    // leagues

    // maps

    // units

});

// decks

// content creators / discover
// streamers
// podcasts
// videos

$router->group(['middleware' => 'verified'], function (Router $router) {
    // my decks
});
