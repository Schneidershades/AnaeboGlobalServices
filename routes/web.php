<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/url/js/api/fetchStock', 'Web\AGS\Stock\StockController@fetchStock');
Route::get('/url/js/api/fetchStock/{id}', 'Web\AGS\Stock\StockController@fetchStockid');

Route::group(['prefix' => '/ags/account', 'middleware' => ['auth']], function(){

	Route::resource('users', 'Web\AGS\User\UserController');
	Route::get('/users/delete/{id}',['uses' => 'Web\AGS\User\UserController@destroy','as' => 'users.delete']);

    Route::resource('drivers', 'Web\AGS\Driver\DriverController');
	Route::get('/drivers/delete/{id}',['uses' => 'Web\AGS\Driver\DriverController@destroy','as' => 'drivers.delete']);

    Route::resource('roles', 'Web\AGS\Role\RoleController');

    Route::resource('branches', 'Web\AGS\Branch\BranchController');
	Route::get('/branches/delete/{id}',['uses' => 'Web\AGS\Branch\BranchController@destroy','as' => 'branches.delete']);

	Route::resource('branch-stocks', 'Web\AGS\Branch\BranchController');
	Route::get('/branch-stocks/delete/{id}',['uses' => 'Web\AGS\Branch\BranchController@destroy','as' => 'branch-stocks.delete']);

	Route::resource('suppliers', 'Web\AGS\Supplier\SupplierController');
	Route::get('/suppliers/delete/{id}',['uses' => 'Web\AGS\Supplier\SupplierController@destroy','as' => 'suppliers.delete']);

	Route::resource('stock-category', 'Web\AGS\Stock\StockCategoryController');
	Route::get('/stock-category/delete/{id}',['uses' => 'Web\AGS\Stock\StockCategoryController@destroy','as' => 'stock-category.delete']);

	Route::resource('salary-structure', 'Web\AGS\Salary\SalaryStructureController');
	Route::get('/salary-structure/delete/{id}',['uses' => 'Web\AGS\Salary\SalaryStructureController@destroy','as' => 'salary-structure.delete']);


    Route::resource('stocks', 'Web\AGS\Stock\StockController');
	Route::get('/stocks/delete/{id}',['uses' => 'Web\AGS\Stock\StockController@destroy','as' => 'stocks.delete']);

	Route::resource('expenses', 'Web\AGS\Expense\ExpenseController');
	Route::get('/expenses/delete/{id}',['uses' => 'Web\AGS\Expense\ExpenseController@destroy','as' => 'expense.delete']);

	// Route::resource('stock-transfer', 'Web\AGS\Stock\StockTransferController');
	// Route::get('/stock-transfer/delete/{id}',['uses' => 'Web\AGS\Stock\StockTransferController@destroy','as' => 'stocks-tranfer.delete']);

    Route::resource('purchase', 'Web\AGS\Purchase\PurchaseController');
	Route::get('/purchase/delete/{id}',['uses' => 'Web\AGS\Purchase\PurchaseController@destroy','as' => 'purchase.delete']);

	Route::resource('purchase-return', 'Web\AGS\Purchase\PurchaseReturnController');
	Route::get('/purchase-return/delete/{id}',['uses' => 'Web\AGS\Purchase\PurchaseReturnController@destroy','as' => 'purchase-return.delete']);

	Route::get('/purchase-approval/index/{id}',['uses' => 'Web\AGS\Purchase\PurchaseApprovalController@approve','as' => 'stocks.purchase.approvals.index']);

	Route::get('/stocks/edited/index',['uses' => 'Web\AGS\Stock\StockApprovalController@index','as' => 'stocks.edited.approvals.index']);

	Route::resource('customers', 'Web\AGS\Customer\CustomerController');
	Route::get('/customers/delete/{id}',['uses' => 'Web\AGS\Customer\CustomerController@destroy','as' => 'customers.delete']);

    Route::resource('transactions', 'Web\AGS\Transaction\TransactionController');


	// Route::get('/', 'Web\AGS\Receipt\ReceiptController@index')->name('account');

	Route::group(['prefix' => '/sale'], function(){
		
		Route::get('/', 'Web\AGS\Sale\SaleController@index')->name('account.sales.index');

		Route::get('/{sale}/edit', 'Web\AGS\Sale\SaleController@edit')->name('account.sales.edit');

		Route::patch('/{sale}', 'Web\AGS\Sale\SaleController@update')->name('account.sales.update');

		Route::post('/{sale}', 'Web\AGS\Sale\SaleController@store')->name('account.sales.store');

		Route::get('/create', 'Web\AGS\Sale\SaleController@create')->name('account.sales.create.start');

		Route::get('/past/create', 'Web\AGS\Sale\SaleController@createPrevious')->name('account.sales.create.previous');

		Route::get('/{sale}', 'Web\AGS\Sale\SaleController@show')->name('account.sales.show');

		Route::get('/{sale}/create', 'Web\AGS\Sale\SaleController@create')->name('account.sales.create');
	});

	Route::group(['prefix' => '/purchase'], function(){
		
		Route::get('/', 'Web\AGS\Purchase\PurchaseController@index')->name('account.purchases.index');

		Route::get('/{purchase}/edit', 'Web\AGS\Purchase\PurchaseController@edit')->name('account.purchases.edit');

		Route::patch('/{purchase}', 'Web\AGS\Purchase\PurchaseController@update')->name('account.purchases.update');

		Route::post('/{purchase}', 'Web\AGS\Purchase\PurchaseController@store')->name('account.purchases.store');

		Route::get('/create', 'Web\AGS\Purchase\PurchaseController@create')->name('account.purchases.create.start');

		Route::get('/{purchase}', 'Web\AGS\Purchase\PurchaseController@show')->name('account.purchases.show');

		Route::get('/{purchase}/create', 'Web\AGS\Purchase\PurchaseController@create')->name('account.purchases.create');
	});

	Route::group(['prefix' => '/transfer'], function(){
		
		Route::get('/', 'Web\AGS\Stock\StockTransferController@index')->name('account.transfers.index');

		Route::get('/{transfer}/edit', 'Web\AGS\Stock\StockTransferController@edit')->name('account.transfers.edit');

		Route::patch('/{transfer}', 'Web\AGS\Stock\StockTransferController@update')->name('account.transfers.update');

		Route::post('/{transfer}', 'Web\AGS\Stock\StockTransferController@store')->name('account.transfers.store');

		Route::get('/create', 'Web\AGS\Stock\StockTransferController@create')->name('account.transfers.create.start');

		Route::get('/{transfer}', 'Web\AGS\Stock\StockTransferController@show')->name('account.transfers.show');

		Route::get('/{transfer}/create', 'Web\AGS\Stock\StockTransferController@create')->name('account.transfers.create');
	});
});



Route::get('/ajax/store', 'Web\AGS\Sale\SaleController@ajaxStock');

