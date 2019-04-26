<?php

namespace App\Models\AGS;

use App\Models\AGS\Transaction;
use App\Models\AGS\Receipt;
use App\Models\AGS\CustomerApprovals;
use App\Wallet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
	use SoftDeletes;

	protected $fillable = [
        'name',
        'email' ,
        'address' ,
        'contact' ,
    ];

    const APPROVAL_PRROPERTIES =[
        'name',
        'email' ,
        'address' ,
        'contact' ,
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
        $this->customerApprovals()->create($approvalProperties);
    }

    protected function currentPropertiesDifferToGiven(array $properties)
    {
        return array_only($this->toArray(), self::APPROVAL_PRROPERTIES) != $properties;
    }


    public function transactions()
	{
		return $this->hasMany(Transaction::class);
	}

	public function customerApprovals()
	{
		return $this->hasMany(CustomerApprovals::class);
	}

	public function wallet()
    {
        return $this->hasOne(Wallet::class);
    }

    public function receipts()
    {
        return $this->hasMany(Receipt::class);
    }

}
