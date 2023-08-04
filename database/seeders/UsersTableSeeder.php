<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Agregar un usuario de ejemplo
        DB::table('users')->insert([
            'name' => 'Ejemplo Usuario',
            'email' => 'ejemplo@email.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'role_id' => null,
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Puedes agregar más usuarios aquí si lo deseas
    }
}
