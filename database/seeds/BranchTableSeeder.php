<?php

use Illuminate\Database\Seeder;
use App\Models\AGS\Branch;

class BranchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stock = Branch::create([
        	'name' => 'Depot 1',
	        'area' => 'Area 1',
            'contact' => '056784967458964',
            'address' => 'Abuja',
	        'state' => 'Abuja',
	        'country' => 'Nigeria',
        ]);

        $stock = Branch::create([
        	'name' => 'Depot 2',
	        'area' => 'Gwagwalada',
            'contact' => '45784953754453',
            'address' => 'Abuja',
	        'state' => 'Abuja',
	        'country' => 'Nigeria',
        ]);
    }
}
