<?php

namespace App\Models;

class Profile extends AbstractModel
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
