<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category_name' => 'Dành cho chó',
            'category_description' => 'Dành cho chó',
            'category_slug' => 'danh-cho-cho',
            'category_status' => 'true',
            'category_ordinal' => 1,
            'user_id' => 1,
        ]);
       
    }
}
