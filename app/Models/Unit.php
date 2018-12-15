<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    public function deck()
    {
        return $this->belongsTo(Deck::class);
    }

    public function faction()
    {
        return $this->belongsTo(Faction::class);
    }
}
