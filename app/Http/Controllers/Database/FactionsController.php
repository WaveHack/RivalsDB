<?php

namespace App\Http\Controllers\Database;

use App\Http\Controllers\Controller;
use App\Models\Faction;

class FactionsController extends Controller
{
    public function index()
    {
        return view('pages.database.factions', [
            'factions' => Faction::orderBy('name')->get(),
        ]);
    }
}
