<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'name' =>'realme Mobile',
                'price' => '17000',
                'gallery' => 'https://www.lg.com/in/images/mobile-phones/md06155757/gallery/Platinum_01-1100-V4.jpg',
                'category' => 'electronics',
                'description' => 'a smarttv  ',
                
            ],
            [
                'name' =>'oppo Mobile',
                'price' => '20000',
                'gallery' => 'https://www.lg.com/in/images/mobile-phones/md06155757/gallery/Platinum_01-1100-V4.jpg',
                'category' => 'electronics',
                'description' => 'a smartphone with 6 gb ram ',
                
            ],
            [
                'name' =>'oneplus Mobile',
                'price' => '40000',
                'gallery' => 'https://www.lg.com/in/images/mobile-phones/md06155757/gallery/Platinum_01-1100-V4.jpg',
                'category' => 'electronics',
                'description' => 'a smartphone with 6 gb ram ',
                
            ],
            [
                'name' =>'LG tv',
                'price' => '50000',
                'gallery' => 'https://images-eu.ssl-images-amazon.com/images/I/51ovn-3QDML._SY300_SX300_QL70_FMwebp_.jpg',
                'category' => 'electronics',
                'description' => 'a smart tv ',
                
            ]
        ]);
    }
}
