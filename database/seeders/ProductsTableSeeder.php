<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Agregar productos de ejemplo
        DB::table('products')->insert([
            'name' => 'Producto 1',
            'description' => 'Descripción del Producto 1',
            'amount' => 10,
            'price_production' => 50.00,
            'image' => 'producto1.jpg',
            'category_id' => 1, // ID de la categoría a la que pertenece el producto
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Producto 2',
            'description' => 'Descripción del Producto 2',
            'amount' => 5,
            'price_production' => 30.00,
            'image' => 'producto2.jpg',
            'category_id' => 2, // ID de la categoría a la que pertenece el producto
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Puedes agregar más productos aquí si lo deseas
    }
}
