<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Ender 3 Pro',
            'available_stock' => 25
        ]);
        DB::table('products')->insert([
            'name' => 'Ender 3 V2',
            'available_stock' => 25
        ]);
        DB::table('products')->insert([
            'name' => 'Ender 5',
            'available_stock' => 25
        ]);
        DB::table('products')->insert([
            'name' => 'Ender 5 Pro',
            'available_stock' => 25
        ]);
        DB::table('products')->insert([
            'name' => 'CR-10 Smart',
            'available_stock' => 25
        ]);
        DB::table('products')->insert([
            'name' => 'CR-6 Max',
            'available_stock' => 25
        ]);
        DB::table('products')->insert([
            'name' => 'CR-6 SE',
            'available_stock' => 25
        ]);
        DB::table('products')->insert([
            'name' => '3DPrintMill',
            'available_stock' => 25
        ]);
    }
}
