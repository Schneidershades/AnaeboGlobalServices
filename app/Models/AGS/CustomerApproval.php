<?php

namespace App\Models\AGS;

use App\Models\AGS\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomerApproval extends Model
{
	use SoftDeletes;

	protected $fillable = [
        'name',
        'email' ,
        'address' ,
        'contact' ,
    ];

     protected  static function boot()
    {
    	parent::boot();

    	static::creating(function ($approval){
    		$approval->customer->customerApprovals->each->delete();
    	});
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
