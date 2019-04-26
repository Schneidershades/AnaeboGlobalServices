<?php

namespace App\Models\AGS;

use App\Models\AGS\User;
use App\Models\AGS\Receipt;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
	use SoftDeletes;
	
    public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function branch()
	{
		return $this->belongsTo(Branch::class);
	}

	public function stock()
	{
		return $this->belongsTo(Stock::class);
	}

	public function customer()
	{
		return $this->belongsTo(Customer::class);
	}

	public function receipt()
	{
		return $this->belongsTo(Receipt::class);
	}
}
