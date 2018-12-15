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

        $commanders = Commander::where('name', 'like', "%{$query}%")->with('faction')->get();
        if (!$commanders->isEmpty()) {
            $data['commanders'] = $commanders;
        }

        $factions = Faction::where('name', 'like', "%{$query}%")->get();
        if (!$factions->isEmpty()) {
            $data['factions'] = $factions;
        }

        $units = Unit::where('name', 'like', "%{$query}%")->with('faction')->get();
        if (!$units->isEmpty()) {
            $data['units'] = $units;
        }

        return view('pages.search', [
            'query' => $query,
            'result' => $data,
        ]);
    }
}
