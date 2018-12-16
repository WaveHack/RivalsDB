<?php

namespace App\Models;

class Faction extends AbstractModel
{
    public function commanders()
    {
        return $this->hasMany(Commander::class);
    }

    public function decks()
    {
        return $this->hasMany(Deck::class);
    }

    public function units()
    {
        return $this->hasMany(Unit::class);
    }
}
