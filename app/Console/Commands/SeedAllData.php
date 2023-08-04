<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SeedAllData extends Command
{
    protected $signature = 'seed:all';

    protected $description = 'Run all seeders';

    public function handle()
    {
        $this->call('db:seed', ['--class' => 'UsersTableSeeder']);
        $this->call('db:seed', ['--class' => 'RolesTableSeeder']);
        $this->call('db:seed', ['--class' => 'ProductsTableSeeder']);
        $this->call('db:seed', ['--class' => 'CategoriesTableSeeder']);

        $this->info('All seeders executed successfully.');
    }
}
