<?php

namespace App\Http\Controllers\Database;

use App\Http\Controllers\Controller;
use App\Models\Commander;
use Illuminate\Http\Request;

class CommandersController extends Controller
{
    public function index(Request $request)
    {
        $query = Commander::query()
            ->with('faction')
            ->orderBy('name');

        if ($request->has('faction')) {
            $faction = $request->get('faction');

            $query->join('factions', function ($join) use ($faction) {
                $join->on('commanders.faction_id', '=', 'factions.id')
                    ->where('factions.slug', $faction);
            });
        }

        $commanders = $query->get();

        return view('pages.database.commanders.index', compact('commanders'));
    }

    public function show(string $slug)
    {
        $commander = Commander::query()
            ->with('faction')
            ->where('slug', $slug)
            ->first();

        if (!$commander) {
            abort(404);
        }

        return view('pages.database.commanders.show', compact('commander'));
    }
}
