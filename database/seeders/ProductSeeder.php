<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
            'name'=>'Oppo Mobile',
            'price'=>'20000',
            'category'=>'mobile',
            'gallery'=>'https://image.oppo.com/content/dam/oppo/common/mkt/v2-2/reno5-pro-5g-chaka/navigation/Reno5-pro-chaka-navigation-series-blue-black-v2.jpg',
            'description'=>'a smartphone with 8gb ram and much more features',
            ],
            [
            'name'=>'Onplus TV',
            'price'=>'25000',
            'category'=>'television',
            'gallery'=>'https://www.bajajfinserv.in/Image_LED_TV_1_LED_354x202_desktop.jpg',
            'description'=>'a television with 32px ultra wide and much more features',
            ],
            [
            'name'=>'LG Fridge',
            'price'=>'15000',
            'category'=>'fridge',
            'gallery'=>'https://www.lg.com/in/images/RF/features/GC-F297CLAL-Door-In-Door-D.jpg',
            'description'=>'a fridge with so much more features',
            ],
        ]);
    }
}
