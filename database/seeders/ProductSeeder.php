<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'title' => 'S25+',
            'description' => 'lorem ipsum',
            'price' => 50000000,
        ]);
        Product::create([
            'title' => 'S25 ultra',
            'description' => 'lorem ipsum',
            'price' => 75000000,
        ]);

    }
}
