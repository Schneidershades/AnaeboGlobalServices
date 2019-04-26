<?php

namespace App\Models\AGS;

use App\User;
use App\Models\AGS\StockCategory;
use App\Models\AGS\StockApproval;
use App\Models\AGS\StockQuantity;
use App\Models\AGS\StockTransfer;
use App\Models\AGS\Branch;
use App\Models\AGS\Transaction;
use App\Models\AGS\Supplier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stock extends Model
{
	use SoftDeletes;

    protected $fillable = [
        'user_id',
        'name',
        'stock_category_id',
        'abbr',
        'bulkbreaker',
        'field_retail',
        'retail_vsm',
        'special_price',
        'quantity',
        'branch_id',
        'approved',
    ];

    const APPROVAL_PRROPERTIES =[
        'user_id',
        'name',
        'abbr',
        'bulkbreaker',
        'field_retail',
        'retail_vsm',
        'special_price',
        'quantity',
        'branch_id',
    ];

    public function needsApproval($approvalProperties)
    {
        if($this->currentPropertiesDifferToGiven($approvalProperties)){
            return true;
        }
        return false;
    }

    public function createApproval(array $approvalProperties)
    {
        $this->stock_approvals()->create($approvalProperties);
    }

    protected function currentPropertiesDifferToGiven(array $properties)
    {
        return array_only($this->toArray(), self::APPROVAL_PRROPERTIES) != $properties;
    }
	
    public function stock_category()
	{
		return $this->belongsTo(StockCategory::class);
	}
	
	public function branch()
	{
		return $this->belongsTo(Branch::class);
	}

    public function stockTransfers()
    {
        return $this->hasMany(StockTransfer::class);
    }


	public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function stock_approvals()
    {
        return $this->hasMany(StockApproval::class);
    }

    public function stock_quantities()
    {
        return $this->hasMany(StockQuantity::class);
    }
}
