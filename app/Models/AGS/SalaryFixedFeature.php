<?php

namespace App\Models\AGS;

use Illuminate\Database\Eloquent\Model;

class SalaryFixedFeature extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
