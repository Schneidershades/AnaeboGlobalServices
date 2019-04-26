<?php

use Illuminate\Database\Seeder;
use App\Models\AGS\StockCategory;

class StockCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stock = StockCategory::create([
        	'user_id' => 1,
	        'name' => 'Bottle',
            'empties_sales' => '1000',
            'offloading_boys_pay' => 3,
            'motor_boys_pay' => 4,
            'drivers_pay' => 3.5,
        ]);

        $stock = StockCategory::create([
            'user_id' => 1,
            'name' => 'Plastic',
            'empties_sales' => '550',
            'offloading_boys_pay' => 3,
            'motor_boys_pay' => 4,
            'drivers_pay' => 3.5,
        ]);

        $stock = StockCategory::create([
        	'user_id' => 1,
	        'name' => 'Can Drinks',
            'empties_sales' => '0',
            'offloading_boys_pay' => 2,
            'motor_boys_pay' => 2,
            'drivers_pay' => 2,
        ]);

        $stock = StockCategory::create([
            'user_id' => 1,
            'name' => 'Empties Category',
            'empties_sales' => '0',
            'offloading_boys_pay' => 1,
            'motor_boys_pay' => 1,
            'drivers_pay' => 1,
        ]);
    }
}
