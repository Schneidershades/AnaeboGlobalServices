<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\AGS\Users;
use App\Models\AGS\Stock;
use App\Models\AGS\Branch;
use App\Models\AGS\Supplier;
use App\Models\AGS\Customer;
use App\Models\AGS\StockTransfer;
use App\Models\AGS\Sale;
use App\Models\AGS\Purchase;
use View;
use App\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);




        view()->composer('*', function($view) {
            $view
                ->with('users_count', User::count())
                ->with('stocks_count', Stock::count())
                ->with('branches_count', Branch::count())
                ->with('suppliers_count', Supplier::count())
                ->with('customers_count', Customer::count())
                ->with('transfer_count', StockTransfer::count())
                ->with('sales_count', Sale::count())
                ->with('purchase_count', Purchase::count());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
