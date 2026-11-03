<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Gym Weight',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numqums.',
            'price' => 240.00,
            'image' => 'img/feature_prod_01.jpg',
        ]);

        Product::create([
            'name' => 'Cloud Smart Watch',
            'description' => 'Aenean voluptatum amet vel entum eum severo. Incidunt est amet.',
            'price' => 480.00,
            'image' => 'img/feature_prod_02.jpg',
        ]);

        Product::create([
            'name' => 'Summer Shoes',
            'description' => 'Ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'price' => 360.00,
            'image' => 'img/feature_prod_03.jpg',
        ]);
    }
}