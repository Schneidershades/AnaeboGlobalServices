<?php

namespace App\Models\AGS;

use App\Models\AGS\Stock;

use Illuminate\Database\Eloquent\Model;

class StockApproval extends Model
{
    protected $table = 'stock_approvals';

    protected $fillable = [
    	'user_id',
        'name',
        'stock_category_id',
        'abbr',
        'bulkbreaker',
        'field_retail',
        'retail_vsm',
        'special_price',
        'branch_id',
    ];

    protected  static function boot()
    {
    	parent::boot();

    	static::creating(function ($approval){
    		$approval->stock->stock_approvals->each->delete();
    	});
    }

    public function stock()
    {
    	return $this->belongsTo(Stock::class);
    }
}
