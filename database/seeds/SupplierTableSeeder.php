<?php

use Illuminate\Database\Seeder;

use App\Models\AGS\Supplier;
class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $supplier = Supplier::create([
        	'user_id' => 1,
	        'name' => 'Nigerian Breweries',
	        'email' => 'nigerianbreweries@gmail.com',
	        'branch_id' => 1,
	        'address' => 1000,
	        'contact' => 1,
        ]);

        $supplier = Supplier::create([
        	'user_id' => 1,
	        'name' => 'Guiness Breweries',
	        'email' => 'guinessbrewries@yahoo.com',
	        'branch_id' => 1,
	        'address' => 1000,
	        'contact' => 1,
        ]);

    }
}
