<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deck extends Model
{
    public function commander()
    {
        return $this->belongsTo(Commander::class);
    }

    public function faction()
    {
        return $this->belongsTo(Faction::class);
    }

    public function units()
    {
        return $this->hasMany(Unit::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
