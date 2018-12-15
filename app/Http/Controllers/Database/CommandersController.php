<?php

namespace App\Http\Controllers\Database;

use App\Http\Controllers\Controller;
use App\Models\Commander;

class CommandersController extends Controller
{
    public function index()
    {
        return view('pages.database.commanders', [
            'commanders' => Commander::query()
                ->with('faction')
                ->orderBy('unlocked_at_level')
                ->get(),
        ]);
    }
}
