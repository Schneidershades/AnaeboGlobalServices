<?php

namespace App\Models\AGS;

use App\Models\AGS\Stock;
use App\Models\AGS\Branch;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supplier extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'email' ,
        'address' ,
        'contact' ,
    ];

    public function stocks()
	{
		return $this->hasMany(Stock::class);
	}

	public function branch()
	{
		return $this->hasMany(Branch::class);
	}
}
