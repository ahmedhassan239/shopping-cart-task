<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Samsung Galaxy',
                'description' => 'Samsung Brand',
                'user_id'=>1,
                'image' => '1.PNG',
                'price' => 799
            ],
            [
                'name' => 'Apple iPhone 13',
                'user_id'=>1,
                'description' => 'Apple Brand',
                'image' => '2.jpg',
                'price' => 850
            ],
            [
                'name' => 'Google Pixel 2 XL',
                'user_id'=>1,
                'description' => 'Google Pixel Brand',
                'image' => '3.jpg',
                'price' => 499
            ],
            [
                'name' => 'Huawei p50 pro',
                'user_id'=>1,
                'description' => 'Huawei Brand',
                'image' => '4.png',
                'price' => 650
            ]
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
