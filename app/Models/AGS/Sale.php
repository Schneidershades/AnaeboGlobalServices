<?php

namespace App\Models\AGS;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\AGS\SaleTransaction;
use App\Models\AGS\Branch;
use App\Models\AGS\Customers;
use App\User;

class Sale extends Model
{
     use SoftDeletes;

    protected $fillable = [
        'name',
        'customer_id',
        'amount_paid',
        'status' ,
        'payment_method',
        'finished',
    ];

    protected static function boot()
    {
    	parent::boot();

    	static::creating(function($file){
    		$file->identifier = 'sale'.uniqid(true);
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
        $this->approvals()->create($approvalProperties);
    }

    protected function currentPropertiesDifferToGiven(array $properties)
    {
        return array_only($this->toArray(), self::APPROVAL_PRROPERTIES) != $properties;
    }

    public function scopeFinished(Builder $builder)
    {
        return $builder->where('finished', true);
    }

    public function saleTransactions()
    {
        return $this->hasMany(SaleTransaction::class);
    }

	public function branch()
	{
		return $this->belongsTo(Branch::class);
	} 

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    } 
}
