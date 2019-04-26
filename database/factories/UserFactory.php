<?php
use App\Models\AGS\Branch;
use App\Models\AGS\BranchApproval;
use App\Models\AGS\Customer;
use App\Models\AGS\CustomerApproval;
use App\Models\AGS\Sale;
use App\Models\AGS\SaleApproval;
use App\Models\AGS\Stock;
use App\Models\AGS\StockApproval;
use App\Models\AGS\StockCategory;
use App\Models\AGS\Supplier;
use App\Models\AGS\SaleTransaction;
use App\Models\AGS\SalaryStructure;
use App\User;
use App\Models\AGS\Wallet;
use App\Models\AGS\WalletApproval;
use App\Models\AGS\WalletTransaction;
use App\Models\AGS\WalletTransactionApproval;

use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    static $password;
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'branch_id' => Branch::all()->random()->id,
        'salary_structure_id' => SalaryStructure::all()->random()->id,
        'password' => $password ?: $password = bcrypt('password'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(SalaryStructure::class, function (Faker $faker) {
    return [
        'type' => $faker->unique()->randomElement(['Fixed', 'Wage']),
        'date' => $faker->date,
    ];
});

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'user_id' => User::all()->random()->id,
        'reference' => $faker->numberBetween(11000, 90000),
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'branch_id' => Branch::all()->random()->id,
        'address' => $faker->address,
        'contact' => $faker->numberBetween(11000, 90000),
    ];
});



$factory->define(Supplier::class, function (Faker $faker) {
    return [
        'name' => $faker->company(),
        'email' => $faker->unique()->safeEmail,
        'branch_id' => Branch::all()->random()->id,
        'user_id' => User::all()->random()->id,
        'contact' => $faker->numberBetween(1, 200),
        'address' => $faker->address,
    ];
});

$factory->define(CustomerApproval::class, function (Faker $faker) {
    return [
        'user_id' => User::all()->random()->id,
        'approved' => 1,
        'customer_id' => Customer::all()->random()->id,
    ];
});


$factory->define(Wallet::class, function (Faker $faker) {
    return [
        'amount' => $faker->numberBetween(200000, 900000),
        'customer_id' => Customer::all()->random()->id,
    ];
});

$factory->define(WalletApproval::class, function (Faker $faker) {
    return [
        'user_id' => User::all()->random()->id,
        'approved' => 1,
        'wallet_id' => factory(Wallet::class)->create()->id,
    ];
});

$factory->define(WalletTransaction::class, function (Faker $faker) {
    return [
        'user_id' => User::all()->random()->id,
        'action' => $faker->randomElement(['Debit', 'Credit']),
        'amount' => $faker->numberBetween(200000, 900000),
        'wallet_id' => Wallet::all()->random()->id,
        'branch_id' => Branch::all()->random()->id,
    ];
});

$factory->define(WalletTransactionApproval::class, function (Faker $faker) {
    return [
        'user_id' => User::all()->random()->id,
        'approved' => 1,
        'wallet_id' => Wallet::all()->random()->id,
        'wallet_transaction_id' => WalletTransaction::all()->random()->id,

        // if it is edited
        'action' => $faker->randomElement(['Debit', 'Credit']),
        'amount' => $faker->numberBetween(200000, 900000),
        'branch_id' => Branch::all()->random()->id,

    ];
});

$factory->define(StockCategory::class, function (Faker $faker) {
    $stock = App\Stock::class;
    return [
        'user_id' => User::all()->random()->id,
        'name' => $faker->name,
    ];
});

$factory->define(Stock::class, function (Faker $faker) {
    return [
        'user_id' => User::all()->random()->id,
        'name' => $faker->name,
        'stock_category_id' => StockCategory::all()->random()->id,
        'abbr' => $faker->name,
        'bulkbreaker' => $faker->numberBetween(1400, 2400),
        'field_retail' => $faker->numberBetween(1500, 2600),
        'retail_vsm' => $faker->numberBetween(1500, 2600),
        'special_price' => $faker->numberBetween(1200, 3000),
        'quantity' => 0,
        'branch_id' => Branch::all()->random()->id,
        'approved' => $faker->randomElement(['0', '1']),
    ];
});


$factory->define(StockApproval::class, function (Faker $faker) {
    return [
        'user_id' => User::all()->random()->id,
        'approved' => 1,
        'stock_id' => Stock::all()->random()->id,

        // from any changes in stock
        'abbr' => $faker->name,
        'bulkbreaker' => $faker->numberBetween(1400, 2400),
        'field_retail' => $faker->numberBetween(1500, 2600),
        'retail_vsm' => $faker->numberBetween(1500, 2600),
        'special_price' => $faker->numberBetween(1200, 3000),
        'quantity' => 0,
        'branch_id' => Branch::all()->random()->id,
        'approved' => $faker->randomElement(['0', '1']),
    ];
});


$factory->define(Purchase::class, function (Faker $faker) {
    return [
        'user_id' => User::all()->random()->id,
        // adding a stock id  based on his/branch branch
        'stock_id' => Stock::all()->random()->id,
        // supplied by suplier id
        'supplier_id' => Supplier::all()->random()->id,
        'quantity' => $faker->numberBetween(59, 100000),
        'branch_id' => Branch::all()->random()->id,
        'approved' => $faker->randomElement(['0', '1']),
        'cost' => $faker->numberBetween(1750, 4560)
    ];
});


$factory->define(StockQuantityApproval::class, function (Faker $faker) {
    return [
        'user_id' => User::all()->random()->id,
        'approved' => 1,

        // adding a stock id  based on his/branch branch
        'stock_id' => Stock::all()->random()->id,
        // supplied by suplier id
        'supplier_id' => Supplier::all()->random()->id,
        'quantity' => $faker->numberBetween(59, 100000),
        'branch_id' => Branch::all()->random()->id,
    ];
});

$factory->define(Sale::class, function (Faker $faker) {
    return [
        'customer_id' =>  Customer::all()->random()->id,
        'discount' => $faker->numberBetween(300, 9000),
        'grandTotal' => $faker->numberBetween(300, 9000),
        'due' => $faker->numberBetween(-3000, 9000),
        'paid' => $faker->numberBetween(3000, 90000),
        'paymentStatus' => $faker->randomElement(['Full', 'Partial', 'Advanced']),
        'paymentType' => $faker->randomElement(['POS', 'Bank_Transfer', 'Cash', 'Wallet']),
        'paymentType' => $faker->randomElement(['Pending', 'Cancelled', 'Fulfilled']),
        'user_id' => User::all()->random()->id,
        'branch_id' => Branch::all()->random()->id,
        'finished' => true,
    ];
});

$factory->define(SaleApproval::class, function (Faker $faker) {
    return [
        'approved' => 1,
        'user_id' => User::all()->random()->id,
        'sale_id' => Sale::all()->random()->id,

        // if edited
        'customer_id' =>  Customer::all()->random()->id,
        'expected_amount' => $faker->numberBetween(3000, 90000),
        'amount_paid' => $faker->numberBetween(3000, 90000),
        'status' => $faker->randomElement(['Pending', 'Cancelled', 'Fulfilled']),
        'payment_method' => $faker->randomElement(['POS', 'Bank_Transfer', 'Cash', 'Wallet']),
    ];
});

$factory->define(SaleTransaction::class, function (Faker $faker) {
    return [
        'stock_id' =>  Stock::all()->random()->id,
        'quantity' => $faker->numberBetween(900, 9000),
        'sale_id' => Sale::all()->random()->id,
        'valuation' => $faker->numberBetween(900, 9000) * Stock::all()->random()->bulkbreaker,
    ];
});

$factory->define(Branch::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'area' => $faker->name,
        'state' => $faker->name,
        'country' => $faker->name,
    ];
});

$factory->define(BranchApproval::class, function (Faker $faker) {
    return [
        'branch_id' => Branch::all()->random()->id,
        'user_id' => User::all()->random()->id,
        'approved' => 1,

        // if editing
        'name' => $faker->name,
        'area' => $faker->name,
        'state' => $faker->name,
        'country' => $faker->name,
    ];
});



