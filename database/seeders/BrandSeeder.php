<?php

namespace Database\Seeders;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            ['name' => 'EcoBar', 'p_score' => rand(1, 100)],
            ['name' => 'GreenShakes', 'p_score' => rand(1, 100)],
            ['name' => 'Tayto', 'p_score' => rand(1, 100)],
            ['name' => 'Pure Power', 'p_score' => rand(1, 100)],
            ['name' => 'Pure Meals', 'p_score' => rand(1, 100)],
            ['name' => 'Supervalue Premium', 'p_score' => rand(1, 100)],
            ['name' => 'Ristorante', 'p_score' => rand(1, 100)],
            ['name' => 'Fit Meals', 'p_score' => rand(1, 100)],
            // ['name' => 'Vans', 'p_score' => rand(1, 100)],
            // ['name' => 'Sketchers', 'p_score' => rand(1, 100)],
        ];

        // Put brands into the DB
        foreach ($brands as $brand) {
            DB::table('brands')->insert([
                'name' => $brand['name'],
                'p_score' => $brand['p_score'],
            ]);
        }
    }
}


