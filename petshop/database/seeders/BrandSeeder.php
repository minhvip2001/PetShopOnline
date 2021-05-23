<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            [
                'brand_name' => 'Smart Heart',
                'brand_description' => 'Smart Heart',
                'brand_slug' => 'smart-heart',
                'brand_status' => 'true',
                'brand_ordinal' => 1,
                'user_id' => 1,
            ],
            [
                'brand_name' => 'Tellme',
                'brand_description' => 'Tellme',
                'brand_slug' => 'tellme',
                'brand_status' => 'true',
                'brand_ordinal' => 1,
                'user_id' => 1,
            ],
            [
                'brand_name' => 'bowbow',
                'brand_description' => 'bowbow',
                'brand_slug' => 'bowbow',
                'brand_status' => 'true',
                'brand_ordinal' => 1,
                'user_id' => 1,
            ],
        ]);
    }
}
