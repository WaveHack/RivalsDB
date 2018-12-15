<?php

namespace App\Http\Controllers\Database;

use App\Http\Controllers\Controller;
use App\Models\Unit;

class UnitsController extends Controller
{
    public function index()
    {
        return view('pages.database.units.index', [
            'units' => Unit::query()
                ->with('faction')
                ->orderBy('name')
                ->get(),
        ]);
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
