<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faction extends Model
{
    public function commanders()
    {
        return $this->hasMany(Commander::class);
    }

    public function units()
    {
        return $this->hasMany(Unit::class);
    }
}
