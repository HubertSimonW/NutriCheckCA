<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::insert([
            [
                'brand_id' => 1,
                'name' => 'Eco Protein Bar',
                'size' => '60g',
                'carbs' => 25,
                'fat' => 8,
                'protein' => 20,
                'cal' => 250,
                'image' => 'bar.jpg',
                'is_eco_friendly' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand_id' => 1,
                'name' => 'Green Shake',
                'size' => '330ml',
                'carbs' => 12,
                'fat' => 4,
                'protein' => 30,
                'cal' => 180,
                'image' => 'shake.jpg',
                'is_eco_friendly' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
    }
}












