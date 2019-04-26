<?php

namespace App;

use App\Models\AGS\Customer;
use App\Models\AGS\CustomerApproval;
use App\Models\AGS\Supplier;
use App\Models\AGS\Transaction;
use App\Models\AGS\ReceiptApproval;
use App\Models\AGS\WalletTransactionApproval;
use App\Models\AGS\WalletTransaction;
use App\Models\AGS\WalletApprovals;
use App\Models\AGS\UserApproval;
use App\Models\AGS\StockApproval;
use App\Models\AGS\Stock;
use App\Models\AGS\Sale;
use App\Models\AGS\Branch;
use App\Models\AGS\Purchase;
use App\Models\AGS\StockTransfer;
use App\Models\AGS\SalarySetting;
use App\Models\AGS\SalaryFixedFeature;
use App\Models\AGS\SalaryWageFeature;

use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasRoles;
    use SoftDeletes;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function stockApprovals()
    {
        return $this->hasMany(StockApproval::class);
    }

    public function walletTransactionApprovals()
    {
        return $this->hasMany(WalletTransactionApproval::class);
    }

    public function walletTransaction()
    {
        return $this->hasMany(WalletTransaction::class);
    }

    public function walletApprovals()
    {
        return $this->hasMany(WalletApprovals::class);
    }

    public function userApprovals()
    {
        return $this->hasMany(UserApproval::class);
    }

    public function customerApprovals()
    {
        return $this->hasMany(CustomerApproval::class);
    }

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }

    public function suppliers()
    {
        return $this->hasMany(Supplier::class);
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }

    public function stockTransfers()
    {
        return $this->hasMany(StockTransfer::class);
    }


    public function sales()
    {
        return $this->hasMany(Sale::class);
    }

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }

    public function salarySettings()
    {
        return $this->belongsTo(SalarySetting::class);
    }

    public function salaryWageFeatures()
    {
        return $this->hasOne(SalaryWageFeature::class);
    }

    public function salaryFixedFeatures()
    {
        return $this->hasOne(SalaryWageFeature::class);
    }

}
