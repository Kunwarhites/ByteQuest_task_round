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
        Product::insert([
            [
                'name' => 'Laptop',
                'description' => 'Gaming Laptop',
                'price' => 1500,
                'stock' => 10
            ],
            [
                'name' => 'Smartphone',
                'description' => 'Flagship smartphone',
                'price' => 999,
                'stock' => 20
            ],
        ]);
    }
}
