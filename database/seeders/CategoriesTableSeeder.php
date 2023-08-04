<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Categoría 1',
            'description' => 'Descripción de la Categoría 1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Puedes agregar más categorías aquí si lo deseas
    }
}
