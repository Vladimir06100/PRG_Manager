<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
            Users::class,
        ]);
        $this->call([
            Personnages::class,
        ]);  
        $this->call([
            Groups::class,
        ]);
        $this->call([
            Members::class,
        ]);
    }
}
