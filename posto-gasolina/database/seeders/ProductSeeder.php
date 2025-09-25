<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            // Aditivos
            ['name' => 'MAX DIESEL', 'price' => 15],
            ['name' => 'CLEAN GAS', 'price' => 18],
            ['name' => 'FLEX', 'price' => 20],
            ['name' => 'MAX POWER', 'price' => 25],
            ['name' => 'Radiador Azul', 'price' => 22],
            ['name' => 'Radiador Verde', 'price' => 22],

            // Óleos para carro
            ['name' => 'Óleo 0W-30 C2', 'price' => 50],
            ['name' => 'Óleo 5W-40', 'price' => 45],
            ['name' => 'Óleo 20W-50', 'price' => 40],
            ['name' => 'Óleo 25W-50', 'price' => 40],
            ['name' => 'Óleo 15W-40', 'price' => 42],

            // Galão e Aditivos Radiadores
            ['name' => 'Galão 5L Aditivo Radiador Verde', 'price' => 60],
            ['name' => 'Galão 5L Aditivo Radiador Rosa', 'price' => 65],

            // Aditivos para Tanques STP
            ['name' => 'Aditivo Flex Treatment STP', 'price' => 28],
            ['name' => 'Aditivo para Motor Diesel STP', 'price' => 30],
            ['name' => 'Aditivo Fuel Injector Cleaner STP', 'price' => 32],
            ['name' => 'Aditivo Octane Booster STP', 'price' => 35],
        ];

        foreach ($products as $p) {
            Product::create($p);
        }
    }
}