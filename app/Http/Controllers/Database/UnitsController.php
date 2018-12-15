<?php

namespace App\Http\Controllers\Database;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitsController extends Controller
{
    public function index(Request $request)
    {
        $query = Unit::query()
            ->with('faction')
            ->orderBy('name');

        if ($request->has('faction')) {
            $faction = $request->get('faction');

            $query->join('factions', function ($join) use ($faction) {
                $join->on('units.faction_id', '=', 'factions.id')
                    ->where('factions.slug', $faction);
            });
        }

        $units = $query->get();

        return view('pages.database.units.index', compact('units'));
    }

    public function show(string $slug)
    {
        $unit = Unit::query()
            ->with('faction')
            ->where('slug', $slug)
            ->first();

        if (!$unit) {
            abort(404);
        }

        return view('pages.database.units.show', compact('unit'));
    }
}
