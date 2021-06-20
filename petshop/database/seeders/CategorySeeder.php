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
            [
                'category_name' => 'Dành cho chó',
                'category_description' => 'Dành cho chó',
                'category_slug' => 'danh-cho-cho',
                'category_status' => 'true',
                'category_ordinal' => 1,
                'user_id' => 1,
            ],
            [
                'category_name' => 'Dành cho mèo',
                'category_description' => 'Dành cho mèo',
                'category_slug' => 'danh-cho-meo',
                'category_status' => 'true',
                'category_ordinal' => 2,
                'user_id' => 1,
            ],
            [
                'category_name' => 'Dây dắt, phụ kiện',
                'category_description' => 'Dây dắt, phụ kiện',
                'category_slug' => 'phu-kien-day-dat-vong-co',
                'category_status' => 'true',
                'category_ordinal' => 3,
                'user_id' => 1,
            ],
            [
                'category_name' => 'Quần áo',
                'category_description' => 'Quần áo',
                'category_slug' => 'quan-ao-danh-cho-cho-meo',
                'category_status' => 'true',
                'category_ordinal' => 4,
                'user_id' => 1,
            ],
            [
                'category_name' => 'Bát bình chứa đựng',
                'category_description' => 'Bát bình chứa đựng',
                'category_slug' => 'bat-an-uong-binh-sua',
                'category_status' => 'true',
                'category_ordinal' => 5,
                'user_id' => 1,
            ],
            [
                'category_name' => 'Đồ vận chuyển, nuôi nhốt',
                'category_description' => 'Đồ vận chuyển, nuôi nhốt',
                'category_slug' => 'chuong-long-quay-nuoi',
                'category_status' => 'true',
                'category_ordinal' => 6,
                'user_id' => 1,
            ],
            [
                'category_name' => 'Sữa tắm, khử mùi',
                'category_description' => 'Sữa tắm nước hoa khử mùi dành cho chó mèo',
                'category_slug' => 'sua-tam-cho-meo',
                'category_status' => 'true',
                'category_ordinal' => 7,
                'user_id' => 1,
            ],
            [
                'category_name' => 'Hỗ trợ chăm sóc',
                'category_description' => 'Hỗ trợ chăm sóc',
                'category_slug' => 'ho-tro-cham-soc',
                'category_status' => 'true',
                'category_ordinal' => 8,
                'user_id' => 1,
            ],
            [
                'category_name' => 'Bổ sung dinh dưỡng',
                'category_description' => 'Bổ sung dinh dưỡng',
                'category_slug' => 'bo-sung-dinh-duong',
                'category_status' => 'true',
                'category_ordinal' => 9,
                'user_id' => 1,
            ],
            [
                'category_name' => 'Thú Y',
                'category_description' => 'Thuốc Thú Y',
                'category_slug' => 'thuoc-thu-y',
                'category_status' => 'true',
                'category_ordinal' => 10,
                'user_id' => 1,
            ],
            
            
        ]);
       
    }
}
