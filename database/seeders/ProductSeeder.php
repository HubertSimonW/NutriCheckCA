<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'brand_id' => 1, // Brand id - from brand seeder
                'name' => 'Eco Protein Bar',
                'cal' => 250,
                'carbs' => 25,
                'fat' => 8,
                'protein' => 20,
                'size' => '60g',
                'image' => 'proteinbar.jpg',
                'is_eco_friendly' => true
            ],
            [
                'brand_id' => 2,
                'name' => 'Green Shake',
                'cal' => 180,
                'carbs' => 12,
                'fat' => 4,
                'protein' => 30,
                'size' => '330ml',
                'image' => 'greenshake.jpg',
                'is_eco_friendly' => false
            ],
        ];

        // Put Produicts into the database
        foreach ($products as $product) {
            DB::table('products')->insert([
                'brand_id' => $product['brand_id'],
                'name' => $product['name'],
                'cal' => $product['cal'],
                'carbs' => $product['carbs'],
                'fat' => $product['fat'],
                'protein' => $product['protein'],
                'size' => $product['size'],
                'image' => $product['image'],
                'is_eco_friendly' => $product['is_eco_friendly'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}


