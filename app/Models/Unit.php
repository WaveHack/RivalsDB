<?php

namespace App\Models;

use DB;

class Unit extends AbstractModel
{
    public function deck()
    {
        return $this->belongsTo(Deck::class);
    }

    public function faction()
    {
        return $this->belongsTo(Faction::class);
    }

    public function strengths()
    {
        return DB::table('unit_strengths')
            ->where('unit_id', $this->id)
            ->pluck('type');
    }

    public function targets()
    {
        return DB::table('unit_targets')
            ->where('unit_id', $this->id)
            ->pluck('type');
    }
}
