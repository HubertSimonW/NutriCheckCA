<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $brands = Brand::all();

        // Get IDs dynamically
        $ecoBarId = $brands->where('name', 'EcoBar')->first()?->id;
        $greenShakesId = $brands->where('name', 'GreenShakes')->first()?->id;
        $taytoId = $brands->where('name', 'Tayto')->first()?->id;
        $purePowerId = $brands->where('name', 'Pure Power')->first()?->id;
        $pureMealsId = $brands->where('name', 'Pure Meals')->first()?->id;
        $superValueId = $brands->where('name', 'Supervalue Premium')->first()?->id;
        $ristoranteId = $brands->where('name', 'Ristorante')->first()?->id;
        $fitMealsId = $brands->where('name', 'Fit Meals')->first()?->id;

        $products = [
            [
                'brand_id' => $ecoBarId,
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
                'brand_id' => $greenShakesId,
                'name' => 'Green Shake',
                'cal' => 180,
                'carbs' => 12,
                'fat' => 4,
                'protein' => 30,
                'size' => '330ml',
                'image' => 'greenshake.jpg',
                'is_eco_friendly' => false
            ],
            [
                'brand_id' => $taytoId,
                'name' => 'Tayto Crisps',
                'cal' => 140,
                'carbs' => 15,
                'fat' => 7,
                'protein' => 2,
                'size' => '45g',
                'image' => 'tayto.jpg',
                'is_eco_friendly' => false
            ],
            [
                'brand_id' => $purePowerId,
                'name' => 'Pure Power Chicken Tikka',
                'cal' => 320,
                'carbs' => 20,
                'fat' => 10,
                'protein' => 28,
                'size' => '400g',
                'image' => 'chicken-tikka.jpg',
                'is_eco_friendly' => true
            ],
            [
                'brand_id' => $pureMealsId,
                'name' => 'Tomato Chicken Meatballs',
                'cal' => 340,
                'carbs' => 30,
                'fat' => 12,
                'protein' => 26,
                'size' => '450g',
                'image' => 'meatballs.jpg',
                'is_eco_friendly' => true
            ],
            [
                'brand_id' => $superValueId,
                'name' => 'Turkey Slices',
                'cal' => 110,
                'carbs' => 2,
                'fat' => 3,
                'protein' => 22,
                'size' => '100g',
                'image' => 'turkey.jpg',
                'is_eco_friendly' => false
            ],
            [
                'brand_id' => $ristoranteId,
                'name' => 'Ristorante Pizza',
                'cal' => 800,
                'carbs' => 90,
                'fat' => 30,
                'protein' => 20,
                'size' => '350g',
                'image' => 'pizza.jpg',
                'is_eco_friendly' => false
            ],
            [
                'brand_id' => $fitMealsId,
                'name' => 'Pure Power Bolognese',
                'cal' => 400,
                'carbs' => 40,
                'fat' => 15,
                'protein' => 25,
                'size' => '500g',
                'image' => 'bolognese.jpg',
                'is_eco_friendly' => true
            ],
        ];

        foreach ($products as $product) {
            DB::table('products')->insert([
                ...$product,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}




