<?php

namespace App\Models;

class Commander extends AbstractModel
{
    public function faction()
    {
        return $this->belongsTo(Faction::class);
    }
}
