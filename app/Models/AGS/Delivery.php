<?php

namespace App\Models\AGS;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\AGS\Supplier;
use App\Models\AGS\Stock;
use App\Models\AGS\Branch;
use App\Models\AGS\PurchaseApproval;
use App\Models\AGS\Delivery;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use SoftDeletes;
    
    public function purchase()
    {
        return $this->belongsTo(Purchase::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function stock()
    {
        return $this->belongsTo(Stock::class);
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}
