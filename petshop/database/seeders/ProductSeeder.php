<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

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
            [
                'product_name' => '',
                '' => '',
                'display_name' => '',
                'display_name' => '',
                'display_name' => '',
            ],
        ]);
    }
}
