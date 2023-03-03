<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::insert([
            ['name' => 'Surabaya Pusat'],
            ['name' => 'Surabaya Barat'],
            ['name' => 'Surabaya Timur'],
            ['name' => 'Surabaya Utara'],
            ['name' => 'Surabaya Selatan'],
        ]);
    }
}
