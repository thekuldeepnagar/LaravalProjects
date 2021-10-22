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
            ['name'=>'LG Mobile',
            'price'=>'20000',
            'category'=>'mobile',
            'description'=>'A Smart phone with 4gb ram with much more feature',
            'gallery'=>'https://m.media-amazon.com/images/I/31rgA0K1zbS._AC_UY218_.jpg',
            ],
            ['name'=>'oppo Mobile',
            'price'=>'30000',
            'category'=>'mobile',
            'description'=>'A Smart phone with 6gb ram with much more feature',
            'gallery'=>'https://m.media-amazon.com/images/I/71geVdy6-OS._AC_UY218_.jpg',
            ],
            ['name'=>'LG TV',
            'price'=>'50000',
            'category'=>'TV',
            'description'=>'A Smart Tv with 4gb ram with much more feature',
            'gallery'=>'https://m.media-amazon.com/images/I/81e0B7ek-8L._AC_UY218_.jpg',
            ],
            ['name'=>'Sony TV',
            'price'=>'10000',
            'category'=>'TV',
            'description'=>'A SmartTv with 4gb ram with much more feature',
            'gallery'=>'https://m.media-amazon.com/images/I/915X01--m2S._AC_UY218_.jpg',
            ],
            ['name'=>'LG Fridge',
            'price'=>'18000',
            'category'=>'HOME',
            'description'=>'A Fridge with much more feature',
            'gallery'=>'https://m.media-amazon.com/images/I/71PjRr580lL._AC_UY218_.jpg',
            ]

        ]);
    }
}
