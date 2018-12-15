<?php

namespace App\Http\Controllers\Database;

use App\Http\Controllers\Controller;
use App\Models\Commander;

class CommandersController extends Controller
{
    public function index()
    {
        return view('pages.database.commanders.index', [
            'commanders' => Commander::query()
                ->with('faction')
                ->orderBy('unlocked_at_level')
                ->get(),
        ]);
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
