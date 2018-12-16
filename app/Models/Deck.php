<?php

namespace App\Models;

class Deck extends AbstractModel
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
        return $this->belongsToMany(Unit::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
