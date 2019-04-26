<?php

namespace App\Models\AGS;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\AGS\Supplier;
use App\Models\AGS\Stock;
use App\Models\AGS\Branch;
use App\Models\AGS\PurchaseApproval;
use App\Models\AGS\PurchaseTransaction;
use App\User;



class Purchase extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'supplier_id',
        'status' ,
        'finished',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function($file){
            $file->identifier = 'pur'.uniqid(true);
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

	public function purchaseTransactions()
    {
        return $this->hasMany(PurchaseTransaction::class);
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
