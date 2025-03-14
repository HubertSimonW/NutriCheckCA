<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            ['name' => 'Nike', 'p_score' => rand(1, 100)],
            ['name' => 'Adidas', 'p_score' => rand(1, 100)],
            ['name' => 'Puma', 'p_score' => rand(1, 100)],
            ['name' => 'Under Armour', 'p_score' => rand(1, 100)],
            ['name' => 'Reebok', 'p_score' => rand(1, 100)],
            ['name' => 'New Balance', 'p_score' => rand(1, 100)],
            ['name' => 'Asics', 'p_score' => rand(1, 100)],
            ['name' => 'Converse', 'p_score' => rand(1, 100)],
            ['name' => 'Vans', 'p_score' => rand(1, 100)],
            ['name' => 'Sketchers', 'p_score' => rand(1, 100)],
        ];

        // Insert the brands into the database
        foreach ($brands as $brand) {
            DB::table('brands')->insert([
                'name' => $brand['name'],
                'p_score' => $brand['p_score'],
            ]);
        }
    }

}
