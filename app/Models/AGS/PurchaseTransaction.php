<?php

namespace App\Models\AGS;

use Illuminate\Database\Eloquent\Model;
use App\Models\AGS\Purchase;

class PurchaseTransaction extends Model
{
    public function purchase()
    {
        return $this->belongsTo(Purchase::class);
    }
}
