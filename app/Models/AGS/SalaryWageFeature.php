<?php

namespace App\Models\AGS;

use Illuminate\Database\Eloquent\Model;

class SalaryWageFeature extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
