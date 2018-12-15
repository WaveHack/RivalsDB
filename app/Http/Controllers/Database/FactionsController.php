<?php

namespace App\Http\Controllers\Database;

use App\Http\Controllers\Controller;
use App\Models\Faction;

class FactionsController extends Controller
{
    public function index()
    {
        return view('pages.database.factions.index', [
            'factions' => Faction::query()
                ->withCount(['commanders', 'units'])
                ->orderBy('name')
                ->get(),
        ]);
    }

    public function show(string $slug)
    {
        $faction = Faction::query()
            ->where('slug', $slug)
            ->first();

        if (!$faction) {
            abort(404);
        }

        return view('pages.database.factions.show', compact('faction'));
    }
}
