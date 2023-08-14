<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DBData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('roles')->insert([
            'name' => 'admin',
        ]);

        for ($i=0; $i < 100; $i++) { 
            DB::table('users')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10) . '@gmail.com',
                'password' => Str::random(10),
                'role_id' => 1
            ]);

            DB::table('categories')->insert([
                'name' => Str::random(10),
                'description' => Str::random(10),
            ]);

            DB::table('products')->insert([
                'name' => Str::random(10),
                'description' => Str::random(10),
                'amount' => 1,
                'price_production' => 1,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnQMEXcSSGKOmEoQWVDeoRNkinCykM6xulRhEFu5LU&s',
                'category_id' => 1
            ]);
        }
    }
}
