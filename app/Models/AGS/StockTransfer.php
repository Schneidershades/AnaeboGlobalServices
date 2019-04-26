<?php

namespace App\Models\AGS;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\AGS\Supplier;
use App\Models\AGS\Stock;
use App\Models\AGS\Branch;
use App\Models\AGS\PurchaseApproval;
use App\Models\AGS\StockTransferTransaction;
use App\User;


class StockTransfer extends Model
{
	use SoftDeletes;

    protected $fillable = [
        'sending_user_id',
        'status' ,
        'finished',
    ];

    protected $casts = [
        'transfer' => 'array',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function($file){
            $file->identifier = 'trf'.uniqid(true);
        });
    }

    public function getRouteKeyName()
    {
        return 'identifier';
    }


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

	public function stockTransferTransactions()
    {
        return $this->hasMany(StockTransferTransaction::class);
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


}
