<?php

use App\Http\Controllers\Database\CommandersController;
use App\Http\Controllers\Database\FactionsController;
use App\Http\Controllers\Database\UnitsController;
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
$router->group(['prefix' => 'db', 'as' => 'db.'], function (Router $router) {

    $router->get('commanders', [CommandersController::class, 'index'])->name('commanders');
    $router->get('commanders/{slug}', [CommandersController::class, 'show'])->name('commanders.show');

    $router->get('factions', [FactionsController::class, 'index'])->name('factions');
    $router->get('factions/{slug}', [FactionsController::class, 'show'])->name('factions.show');

    // leagues

    // maps

    $router->get('units', [UnitsController::class, 'index'])->name('units');
    $router->get('units/{slug}', [UnitsController::class, 'show'])->name('units.show');

});

// decks

// content creators / discover
// streamers
// podcasts
// videos

$router->group(['middleware' => 'verified'], function (Router $router) {
    // my decks
});

$router->get('test', function () {
    if (app()->environment() !== 'local') {
        abort(404);
    }

//    $fp = fopen(resource_path('data/commanders.csv'), 'r');
    $fp = fopen(resource_path('data/units.csv'), 'r');

    $headers = [];

    while (!feof($fp)) {
        if (empty($headers)) {
            $headers = fgetcsv($fp);
            continue;
        }

        $data = array_combine($headers, fgetcsv($fp));

        \App\Models\Unit::updateOrCreate([
            'slug' => str_slug($data['Name']),
        ], [
            'faction_id' => ($data['Faction'] === 'GDI' ? 1 : 2),
            'name' => $data['Name'],
            'flavor_description' => $data['Flavor'],
            'item_description'=> $data['Item Description'],
            'rarity' => $data['Rarity'],
            'type' => $data['Type'],
            'unlocked_at_level' => $data['Unlocked at level'],
            'health' => 0,
            'dps' => 0,
            'speed' => $data['Speed'] ?: 'average',
            'building' => $data['Building'],
            'cost' => $data['Cost'],
        ]);

        // strong vs
        // targets

//        \App\Models\Commander::updateOrCreate([
//            'slug' => str_slug($data['Name']),
//        ], [
//            'faction_id' => ($data['Faction'] === 'GDI' ? 1 : 2),
//            'name' => $data['Name'],
//            'flavor_description' => $data['Flavor'],
//            'rarity' => 'rare',
//            'unlocked_at_level' => $data['Unlocked at level'],
//            'base_health' => 30000,
//            'harvester_health' => 3400,
//            'commander_power_name' => $data['Power Name'],
//            'commander_power_description' => $data['Power Description'],
//            'commander_power_cost' => $data['Power Cost'],
//        ]);
    }

    fclose($fp);
    return 'Done';
});
