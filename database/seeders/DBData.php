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

        DB::table('roles')->insert([
            'name' => 'vendedor',
        ]);

        DB::table('users')->insert([
            'name' => "Maria",
            'email' =>"maria21@gmail.com",
            'password' => Str::random(10),
            'role_id' => 2
        ]);

        
        DB::table('users')->insert([
            'name' => "Maria",
            'email' =>"maria21@gmail.com",
            'password' => Str::random(10),
            'role_id' => 2
        ]);

        
        DB::table('users')->insert([
            'name' => "Carla",
            'email' =>"carla.catalina@gmail.com",
            'password' => Str::random(10),
            'role_id' => 2
        ]);


        
        DB::table('users')->insert([
            'name' => "Jose",
            'email' =>"jose.llanes@gmail.com",
            'password' => Str::random(10),
            'role_id' => 2
        ]);

        DB::table('categories')->insert([
            'name' => "camisas",
            'description' => "camisas unicolor",
        ]);

        DB::table('categories')->insert([
            'name' => "pantalones",
            'description' => "patalones unicolor",
        ]);

        DB::table('categories')->insert([
            'name' => "camisas",
            'description' => "camisas unicolor",
        ]);

        DB::table('categories')->insert([
            'name' => "camisas",
            'description' => "camisas unicolor",
        ]);

        DB::table('categories')->insert([
            'name' => "camisas",
            'description' => "camisas unicolor",
        ]);

        DB::table('products')->insert([
            'name' => "camisa roja",
            'description' => "camisa roja uni color",
            'amount' => 1,
            'price_production' => 1,
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnQMEXcSSGKOmEoQWVDeoRNkinCykM6xulRhEFu5LU&s',
            'category_id' => 1
        ]);
        
    }
}
