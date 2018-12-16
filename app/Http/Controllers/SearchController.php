<?php

namespace App\Http\Controllers;

use App\Models\Commander;
use App\Models\Faction;
use App\Models\Unit;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->get('q');

        if (in_array($query, ['', null], true)) {
            return redirect()
                ->route('home');
        }

        $data = [];

        $commanders = Commander::query()
            ->where('name', 'like', "%{$query}%")
            ->with('faction')
            ->get();

        if (!$commanders->isEmpty()) {
            $data['commanders'] = $commanders;
        }

        $factions = Faction::query()
            ->where('name', 'like', "%{$query}%")
            ->withCount(['commanders', 'units'])
            ->get();

        if (!$factions->isEmpty()) {
            $data['factions'] = $factions;
        }

        $units = Unit::query()
            ->where('name', 'like', "%{$query}%")
            ->with('faction')
            ->get();

        if (!$units->isEmpty()) {
            $data['units'] = $units;
        }

        // Check if we have only one result, then we can redirect to the show page right away
        if (count($data) === 1) {
            /** @noinspection SuspiciousLoopInspection */
            foreach ($data as $type => $entities) {
                if (count($entities) === 1) {
                    return redirect()
                        ->route("database.{$type}.show", $entities->first()->slug);
                }
            }
        }

        return view('pages.search', [
            'query' => $query,
            'result' => $data,
        ]);
    }
}
