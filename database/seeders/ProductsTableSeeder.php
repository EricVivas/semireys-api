<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Sale;

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
        for ($i = 0; $i < 200; $i++) {
            $fecha = Carbon::now();
            $fecha->setDate(now()->year, rand(1, 12), rand(1, 30));
        
            $sale = Sale::create([
                'name_client' => 'Jose',
                'email_client' => 'jose.1996@gmail.com',
                'number_phone_client' => '9889809888',
                'total' => rand(100, 10000),
                'user_id' => 1,
                'currency_id' => 1,
                'created_at' => $fecha->toDateString(),
                'updated_at' => $fecha->toDateString(),
            ]);
        
            DB::table('product_sale')->insert([
                'amount' => rand(1, 10),
                'sale_id' => $sale->id,
                'product_id' => rand(1, 115),
            ]);
        }
    }
}
