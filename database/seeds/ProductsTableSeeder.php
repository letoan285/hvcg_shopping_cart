<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i = 0; $i < 200; $i++){
            $name = $faker->realText($maxNbChars = 100, $indexSize = 1);
            $products = [
                'name' => $name,
                'slug' => str_slug($name, '-'),
                'selling_price' => rand(90000, 99999),
                'short_description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
                'description' => $faker->realText($maxNbChars = 500, $indexSize = 3),
                'status' => rand(0,1),
                'category_id' => rand(1,10),
                'image' =>$faker->imageUrl($width = 640, $height = 480),
                'supplier_id' => rand(1, 20)
            ];
            DB::table('products')->insert($products);
        }
    }
}
