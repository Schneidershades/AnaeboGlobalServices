<?php

namespace App\Models\AGS;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\AGS\Transaction;
use App\Models\AGS\Stock;
use App\Models\AGS\Receipt;
use App\Models\AGS\Customer;
use App\Models\AGS\Supplier;
use App\Models\AGS\WalletTransaction;
use App\Models\AGS\StockTransfer;
use App\Models\AGS\Purchase;
use App\Models\AGS\Sale;
use App\User;

class Branch extends Model
{
	use SoftDeletes; 

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    } 

    public function stocks()
    {
        return $this->hasMany(Stock::class);
    } 

    public function receipt()
    {
        return $this->hasMany(Receipt::class);
    } 

    public function suppliers()
    {
        return $this->hasMany(Supplier::class);
    } 

    public function sales()
    {
        return $this->hasMany(Sale::class);
    } 

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    } 
    public function walletTransactions()
    {
        return $this->hasMany(WalletTransaction::class);
    } 

    public function customers()
    {
        return $this->hasMany(Customer::class);
    } 

    public function stockTransfers()
    {
        return $this->hasMany(StockTransfer::class, 'branch_id_from');
    } 

}
