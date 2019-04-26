<?php

namespace App\Models\AGS;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\AGS\StockQuantity;

class StockQuantityApproval extends Model
{
	use SoftDeletes;
	
    protected $fillable = [
    	'user_id',
        'stock_id',
        'supplier_id',
        'quantity',
        'branch_id',
    ];

    protected  static function boot()
    {
    	parent::boot();

    	static::creating(function ($approval){
    		$approval->stockQuantity->stock_quantity_approvals->each->delete();
    	});
    }

    public function stockQuantity()
    {
    	return $this->belongsTo(StockQuantity::class);
    }
}
