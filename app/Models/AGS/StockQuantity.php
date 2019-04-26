<?php

namespace App\Models\AGS;

use Illuminate\Database\Eloquent\Model;
use App\Models\AGS\Supplier;
use App\Models\AGS\Stock;
use App\Models\AGS\Branch;
use App\Models\AGS\StockQuantityApproval;
use App\User;

use Illuminate\Database\Eloquent\SoftDeletes;

class StockQuantity extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'stock_id',
        'supplier_id',
        'quantity',
        'branch_id',
    ];

    const APPROVAL_PRROPERTIES =[
        'user_id',
        'stock_id',
        'supplier_id',
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
        $this->stock_quantity_approvals()->create($approvalProperties);
    }

    protected function currentPropertiesDifferToGiven(array $properties)
    {
        return array_only($this->toArray(), self::APPROVAL_PRROPERTIES) != $properties;
    }

    public function isNotApproved()
    {
        return $this->approved == 0;
    }

	
	public function branch()
	{
		return $this->belongsTo(Branch::class);
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

    public function stock()
    {
        return $this->belongsTo(Stock::class);
    }

    public function stock_quantity_approvals()
    {
        return $this->hasMany(StockQuantityApproval::class);
    }

    
	
}
