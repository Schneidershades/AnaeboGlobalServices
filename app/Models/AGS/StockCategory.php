<?php

namespace App\Models\AGS;

use App\Models\AGS\Stock;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StockCategory extends Model
{
	use SoftDeletes;
	
    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }
}
