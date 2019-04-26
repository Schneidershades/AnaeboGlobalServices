<?php

use Illuminate\Database\Seeder;
use App\Models\AGS\Stock;

class StockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$stock = Stock::create([
        	'user_id' => 1,
	        'name' => 'Bottles Empties ',
	        'stock_category_id' => 4,
	        'abbr' => 'BOTTLES EMPTY',
	        'bulkbreaker' => 1000,
	        'field_retail' => 1000,
	        'retail_vsm' => 1000,
	        'special_price' => 0,
	        'quantity' => 1000,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'name' => 'Plastics Empties',
	        'stock_category_id' => 4,
	        'abbr' => 'PLASTICS EMPTY',
	        'bulkbreaker' => 1000,
	        'field_retail' => 1000,
	        'retail_vsm' => 1000,
	        'special_price' => 0,
	        'quantity' => 1000,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);


        $stock = Stock::create([
        	'user_id' => 1,
	        'name' => 'STAR',
	        'stock_category_id' => 1,
	        'abbr' => 'STR',
	        'bulkbreaker' => 2150,
	        'field_retail' => 2210,
	        'retail_vsm' => 2250,
	        'special_price' => 0,
	        'quantity' => 10000,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 1,
	        'name' => 'STAR LITE',
	        'abbr' => 'STR/L',
	        'bulkbreaker' => 2150,
	        'field_retail' => 2210,
	        'retail_vsm' => 2250,
	        'special_price' => 0,
	        'quantity' => 10000,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 1,
	        'name' => 'STAR 3XXX',
	        'abbr' => 'STR3X',
	        'bulkbreaker' => 2150,
	        'field_retail' => 2210,
	        'retail_vsm' => 2250,
	        'special_price' => 0,
	        'quantity' => 3000,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 1,
	        'name' => 'STAR RADLER',
	        'abbr' => 'STR/R',
	        'bulkbreaker' => 2900,
	        'field_retail' => 2960,
	        'retail_vsm' => 3000,
	        'special_price' => 0,
	        'quantity' => 10400,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);


        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 1,
	        'name' => 'GULDER',
	        'abbr' => 'GDR',
	        'bulkbreaker' => 2260,
	        'field_retail' => 2310,
	        'retail_vsm' => 2350,
	        'special_price' => 0,
	        'quantity' => 9400,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 1,
	        'name' => 'HEINEKEN LARGE',
	        'abbr' => 'HNK/L',
	        'bulkbreaker' => 2750,
	        'field_retail' => 2800,
	        'retail_vsm' => 2800,
	        'special_price' => 0,
	        'quantity' => 6400,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 1,
	        'name' => '“33” EXPORT',
	        'abbr' => '“33”',
	        'bulkbreaker' => 1940,
	        'field_retail' => 1990,
	        'retail_vsm' => 2000,
	        'special_price' => 0,
	        'quantity' => 3400,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 1,
	        'name' => 'LIFE',
	        'abbr' => 'LIFE',
	        'bulkbreaker' => 1850,
	        'field_retail' => 1900,
	        'retail_vsm' => 1950,
	        'special_price' => 0,
	        'quantity' => 3480,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 1,
	        'name' => 'GOLDBERG',
	        'abbr' => 'GB',
	        'bulkbreaker' => 1850,
	        'field_retail' => 1900,
	        'retail_vsm' => 1950,
	        'special_price' => 0,
	        'quantity' => 3480,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 1,
	        'name' => 'MORE',
	        'abbr' => 'MORE',
	        'bulkbreaker' => 1450,
	        'field_retail' => 1500,
	        'retail_vsm' => 1500,
	        'special_price' => 0,
	        'quantity' => 3280,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 1,
	        'name' => 'LEGEND LARGE',
	        'abbr' => 'LDG/L',
	        'bulkbreaker' => 2350,
	        'field_retail' => 2390,
	        'retail_vsm' => 2400,
	        'special_price' => 0,
	        'quantity' => 2280,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 1,
	        'name' => 'LEGEND SMALL',
	        'abbr' => 'LDG/S',
	        'bulkbreaker' => 3210,
	        'field_retail' => 3260,
	        'retail_vsm' => 3260,
	        'special_price' => 0,
	        'quantity' => 7280,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 1,
	        'name' => 'AMSTEL',
	        'abbr' => 'AMS',
	        'bulkbreaker' => 2680,
	        'field_retail' => 2800,
	        'retail_vsm' => 2850,
	        'special_price' => 0,
	        'quantity' => 9280,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 1,
	        'name' => 'MALTINA',
	        'abbr' => 'MTN',
	        'bulkbreaker' => 2680,
	        'field_retail' => 2800,
	        'retail_vsm' => 2850,
	        'special_price' => 0,
	        'quantity' => 9280,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 1,
	        'name' => 'MALTAGOLD',
	        'abbr' => 'MG',
	        'bulkbreaker' => 2100,
	        'field_retail' => 2150,
	        'retail_vsm' => 2150,
	        'special_price' => 0,
	        'quantity' => 9280,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

         $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 1,
	        'name' => 'HI-MALT',
	        'abbr' => 'HI-M',
	        'bulkbreaker' => 2100,
	        'field_retail' => 2150,
	        'retail_vsm' => 2150,
	        'special_price' => 0,
	        'quantity' => 9280,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 1,
	        'name' => 'MALTEX',
	        'abbr' => 'MTX',
	        'bulkbreaker' => 2100,
	        'field_retail' => 2150,
	        'retail_vsm' => 2150,
	        'special_price' => 0,
	        'quantity' => 9280,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 1,
	        'name' => 'FAYROUZ',
	        'abbr' => 'FAY',
	        'bulkbreaker' => 1700,
	        'field_retail' => 1750,
	        'retail_vsm' => 1800,
	        'special_price' => 0,
	        'quantity' => 9110,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 1,
	        'name' => 'ACE ROOT',
	        'abbr' => 'ACE/R',
	        'bulkbreaker' => 2400,
	        'field_retail' => 2430,
	        'retail_vsm' => 2450,
	        'special_price' => 0,
	        'quantity' => 5110,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 1,
	        'name' => 'TURBOKING LARGE',
	        'abbr' => 'TK/L',
	        'bulkbreaker' => 1970,
	        'field_retail' => 2020,
	        'retail_vsm' => 2050,
	        'special_price' => 0,
	        'quantity' => 5110,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 1,
	        'name' => 'WILLIAM LARGE',
	        'abbr' => 'WILL/L',
	        'bulkbreaker' => 1970,
	        'field_retail' => 2020,
	        'retail_vsm' => 2050,
	        'special_price' => 0,
	        'quantity' => 5110,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 1,
	        'name' => 'TURBOKING SMALL',
	        'abbr' => 'TK/S',
	        'bulkbreaker' => 2800,
	        'field_retail' => 2850,
	        'retail_vsm' => 2850,
	        'special_price' => 0,
	        'quantity' => 4310,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 1,
	        'name' => 'WILLIAM SMALL',
	        'abbr' => 'WILL/S',
	        'bulkbreaker' => 2800,
	        'field_retail' => 2850,
	        'retail_vsm' => 2850,
	        'special_price' => 0,
	        'quantity' => 11910,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 1,
	        'name' => 'STRONGBOW',
	        'abbr' => 'S/BOW',
	        'bulkbreaker' => 4250,
	        'field_retail' => 4300,
	        'retail_vsm' => 4300,
	        'special_price' => 0,
	        'quantity' => 110110,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);


        // second category

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 2,
	        'name' => 'STAR CAN',
	        'abbr' => 'SC',
	        'bulkbreaker' => 3420,
	        'field_retail' => 3450,
	        'retail_vsm' => 3450,
	        'special_price' => 0,
	        'quantity' => 2110,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 2,
	        'name' => 'GULDER CAN',
	        'abbr' => 'GC',
	        'bulkbreaker' => 3420,
	        'field_retail' => 3450,
	        'retail_vsm' => 3450,
	        'special_price' => 0,
	        'quantity' => 2110,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 2,
	        'name' => 'MALTINA CAN',
	        'abbr' => 'MTN/C',
	        'bulkbreaker' => 3000,
	        'field_retail' => 3050,
	        'retail_vsm' => 3050,
	        'special_price' => 0,
	        'quantity' => 3110,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 2,
	        'name' => 'AMSTEL CAN',
	        'abbr' => 'AMS/C',
	        'bulkbreaker' => 3000,
	        'field_retail' => 3050,
	        'retail_vsm' => 3050,
	        'special_price' => 0,
	        'quantity' => 3110,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 2,
	        'name' => 'FAYROUZ CAN ',
	        'abbr' => 'FAY/C',
	        'bulkbreaker' => 2150,
	        'field_retail' => 2139,
	        'retail_vsm' => 2200,
	        'special_price' => 0,
	        'quantity' => 3110,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 2,
	        'name' => 'HEINEKEN CAN',
	        'abbr' => 'HNK/C',
	        'bulkbreaker' => 3750,
	        'field_retail' => 3780,
	        'retail_vsm' => 3800,
	        'special_price' => 0,
	        'quantity' => 3910,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 2,
	        'name' => 'LEGEND CAN',
	        'abbr' => 'LGD/C',
	        'bulkbreaker' => 2800,
	        'field_retail' => 2805,
	        'retail_vsm' => 2800,
	        'special_price' => 0,
	        'quantity' => 3610,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 2,
	        'name' => 'MALTA GOLD CAN',
	        'abbr' => 'MG/C',
	        'bulkbreaker' => 2650,
	        'field_retail' => 2700,
	        'retail_vsm' => 2700,
	        'special_price' => 0,
	        'quantity' => 3610,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 2,
	        'name' => 'HI-MALT CAN',
	        'abbr' => 'HI-M/C',
	        'bulkbreaker' => 2650,
	        'field_retail' => 2700,
	        'retail_vsm' => 2700,
	        'special_price' => 0,
	        'quantity' => 3610,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 2,
	        'name' => 'MALTEX CAN',
	        'abbr' => 'MTX/C',
	        'bulkbreaker' => 2650,
	        'field_retail' => 2700,
	        'retail_vsm' => 2700,
	        'special_price' => 0,
	        'quantity' => 3610,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 2,
	        'name' => '“33” EXPORT CAN',
	        'abbr' => '33/C',
	        'bulkbreaker' => 3200,
	        'field_retail' => 3220,
	        'retail_vsm' => 3220,
	        'special_price' => 0,
	        'quantity' => 3020,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 2,
	        'name' => 'ACE PASSION  CAN',
	        'abbr' => 'AP/C',
	        'bulkbreaker' => 3000,
	        'field_retail' => 3080,
	        'retail_vsm' => 3000,
	        'special_price' => 0,
	        'quantity' => 3600,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 2,
	        'name' => 'CLIMAX CAN',
	        'abbr' => 'CLX/C',
	        'bulkbreaker' => 4800,
	        'field_retail' => 4850,
	        'retail_vsm' => 4850,
	        'special_price' => 0,
	        'quantity' => 3600,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 2,
	        'name' => 'CLIMAX PET',
	        'abbr' => 'CLX/P',
	        'bulkbreaker' => 1950,
	        'field_retail' => 2000,
	        'retail_vsm' => 2000,
	        'special_price' => 0,
	        'quantity' => 3100,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 2,
	        'name' => 'FAYROUZ PET 50cl',
	        'abbr' => 'FAY/P/B',
	        'bulkbreaker' => 1350,
	        'field_retail' => 1370,
	        'retail_vsm' => 1400,
	        'special_price' => 0,
	        'quantity' => 4100,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 2,
	        'name' => 'MALTINA PET 50cl',
	        'abbr' => 'MTN/P/B',
	        'bulkbreaker' => 1680,
	        'field_retail' => 1720,
	        'retail_vsm' => 1720,
	        'special_price' => 0,
	        'quantity' => 4900,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 2,
	        'name' => 'MALTINA PET 33cl',
	        'abbr' => 'MTN/P/S',
	        'bulkbreaker' => 1300,
	        'field_retail' => 1350,
	        'retail_vsm' => 1350,
	        'special_price' => 0,
	        'quantity' => 4400,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 2,
	        'name' => 'AMSTEL PET 40cl',
	        'abbr' => 'AMS/P',
	        'bulkbreaker' => 1500,
	        'field_retail' => 1500,
	        'retail_vsm' => 1500,
	        'special_price' => 0,
	        'quantity' => 4400,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 2,
	        'name' => 'ACE ROOT CAN',
	        'abbr' => 'ACR/C',
	        'bulkbreaker' => 2370,
	        'field_retail' => 2370,
	        'retail_vsm' => 2400,
	        'special_price' => 0,
	        'quantity' => 4400,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 2,
	        'name' => 'STAR RADLER CAN',
	        'abbr' => 'RAD/C',
	        'bulkbreaker' => 2800,
	        'field_retail' => 2800,
	        'retail_vsm' => 2800,
	        'special_price' => 0,
	        'quantity' => 4500,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 2,
	        'name' => 'STAR RADLER PET',
	        'abbr' => 'RAD/P',
	        'bulkbreaker' => 1570,
	        'field_retail' => 1576,
	        'retail_vsm' => 1600,
	        'special_price' => 0,
	        'quantity' => 4900,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 2,
	        'name' => 'STRONGBOW CAN',
	        'abbr' => 'S/BOW/C',
	        'bulkbreaker' => 4800,
	        'field_retail' => 4860,
	        'retail_vsm' => 4800,
	        'special_price' => 0,
	        'quantity' => 2900,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 2,
	        'name' => 'FAYROUZ PET 33cl',
	        'abbr' => 'FAY/P',
	        'bulkbreaker' => 980,
	        'field_retail' => 1000,
	        'retail_vsm' => 1000,
	        'special_price' => 0,
	        'quantity' => 2900,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 2,
	        'name' => 'STAR CAN BIG',
	        'abbr' => 'S/C/B',
	        'bulkbreaker' => 1950,
	        'field_retail' => 2000,
	        'retail_vsm' => 2050,
	        'special_price' => 0,
	        'quantity' => 3200,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

        $stock = Stock::create([
        	'user_id' => 1,
	        'stock_category_id' => 2,
	        'name' => 'GULDER CAN BIG',
	        'abbr' => 'G/C/B',
	        'bulkbreaker' => 1950,
	        'field_retail' => 2000,
	        'retail_vsm' => 2050,
	        'special_price' => 0,
	        'quantity' => 3200,
	        'approved' => 1,
	        'branch_id' => 1,
        ]);

    }
}




		