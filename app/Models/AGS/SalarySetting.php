<?php

namespace App\Models\Ags;

use Illuminate\Database\Eloquent\Model;

class SalarySetting extends Model
{
    public function user()
    {
        return $this->hasMany(User::class);
    }

}
