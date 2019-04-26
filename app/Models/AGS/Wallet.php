<?php

namespace App\Models\AGS;

use App\Models\AGS\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wallet extends Model
{
    use SoftDeletes;

    public function customer()
	{
		return $this->belongsTo(Customer::class);
	}
}
