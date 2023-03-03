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
        \App\Models\Role::create([
            'name' => 'admin'
        ]);
        \App\Models\Role::create([
            'name' => 'contributor'
        ]);

        \App\Models\User::factory(1)->create();

        $this->call([
            AreaSeeder::class,
            CategorySeeder::class,
        ]);
    }
}
