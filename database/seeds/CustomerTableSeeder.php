<?php

use Illuminate\Database\Seeder;
use App\Models\AGS\Customer;
class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = Customer::create([
        	'user_id' => 1,
	        'reference' => '001389',
	        'name' => 'Nigerian Breweries',
	        'email' => 'BOTTLES EMPTY',
	        'branch_id' => 1,
	        'address' => 1000,
	        'contact' => 1,
        ]);

        $customer = Customer::create([
        	'user_id' => 1,
	        'reference' => '03784',
	        'name' => 1,
	        'email' => 'Guiness Breweries',
	        'branch_id' => 1,
	        'address' => 1000,
	        'contact' => 1,
        ]);


        $customer = Customer::create([
        	'user_id' => 1,
	        'reference' => '804930',
	        'name' => 1,
	        'email' => 'Mr Bottle Company',
	        'branch_id' => 1,
	        'address' => 1000,
	        'contact' => 1,
        ]);
    }
}
