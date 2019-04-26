<?php

namespace App\Models\AGS;

use App\Models\AGS\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WalletApproval extends Model
{
	use SoftDeletes;
	
    public function user()
	{
		return $this->belongsTo(User::class);
	}
}
