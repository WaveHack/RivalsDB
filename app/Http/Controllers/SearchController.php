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
        if (!$request->has('q')) {
            return redirect()
                ->route('home');
        }

        $query = $request->get('q');
        $data = [];

        $commanders = Commander::where('name', 'like', "%{$query}%")->with('faction')->get();
        if (!$commanders->isEmpty()) {
            $data['commanders'] = $commanders->toArray();
        }

        $factions = Faction::where('name', 'like', "%{$query}%")->get();
        if (!$factions->isEmpty()) {
            $data['factions'] = $factions->toArray();
        }

        $units = Unit::where('name', 'like', "%{$query}%")->with('faction')->get();
        if (!$units->isEmpty()) {
            $data['units'] = $units->toArray();
        }

        return view('pages.search', [
            'result' => $data,
        ]);
    }
}
