<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commander extends Model
{
    public function faction()
    {
        return $this->belongsTo(Faction::class);
    }
}
