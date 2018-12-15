<?php

namespace App\Http\Controllers\Database;

use App\Http\Controllers\Controller;

class FactionsController extends Controller
{
    public function index()
    {
        return view('pages.database.factions');
    }
}
