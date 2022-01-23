<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\{
    States, 
    Users,
    CategoriesTasks,
    Tasks
};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            States::class,
            Users::class,
            CategoriesTasks::class,
            Tasks::class
        ]);
    }
}
