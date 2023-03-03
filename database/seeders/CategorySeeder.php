<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timestamp = date('Y-m-d H:i:s');

        Category::insert([
            ['name' => 'History & Heritage', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['name' => 'Museum', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['name' => 'Religi', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['name' => 'Monumen & Landmark', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['name' => 'Pusat Perbelanjaan', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['name' => 'Pasar Tradisional', 'created_at' => $timestamp, 'updated_at' => $timestamp],
        ]);
    }
}
