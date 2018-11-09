<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
        $categories = [
        	['id'=>1, 'name' => 'Văn Hóa', 'slug'=>'van-hoa'],
        	['id'=>2, 'name' => 'Thể Thao ', 'slug'=>'the-thao'],
        	['id'=>3, 'name' => 'Giáo Dục ', 'slug'=>'giao-duc'],
        	['id'=>4, 'name' => 'Đời Sống ', 'slug'=>'doi-song'],
        	['id'=>5, 'name' => 'Giải Trí', 'slug'=>'giai-tri']
        ];

        DB::table('categories')->insert($categories);
    }
}
