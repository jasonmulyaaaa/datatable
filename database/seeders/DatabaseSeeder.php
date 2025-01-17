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
            UsersSeeder::class,
            RolesPermissionsSeeder::class,
            ClientsSeeder::class,
            MattersSeeder::class,
        ]);

        \App\Models\User::factory(20)->create();
        \App\Models\Address::factory(20)->create();
    }
}
