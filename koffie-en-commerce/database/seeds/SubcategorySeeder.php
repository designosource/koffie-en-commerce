<?php

use Illuminate\Database\Seeder;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_subcategory')->delete();

        $category = [
            [
                'subcategory_category_id' => 1,
                'subcategory_name' => 'subcategory 1',
                'category_description' => 'description'
            ],
            [
                'subcategory_category_id' => 1,
                'subcategory_name' => 'subcategory 2',
                'category_description' => 'description'
            ],
            [
                'subcategory_category_id' => 2,
                'subcategory_name' => 'subcategory 3',
                'category_description' => 'description'
            ],
            [
                'subcategory_category_id' => 3,
                'subcategory_name' => 'subcategory 4',
                'category_description' => 'description'
            ],
            [
                'subcategory_category_id' => 3,
                'subcategory_name' => 'subcategory 5',
                'category_description' => 'description'
            ],
            [
                'subcategory_category_id' => 4,
                'subcategory_name' => 'subcategory 6',
                'category_description' => 'description'
            ],
            [
                'subcategory_category_id' => 4,
                'subcategory_name' => 'subcategory 7',
                'category_description' => 'description'
            ],
            [
                'subcategory_category_id' => 5,
                'subcategory_name' => 'subcategory 8',
                'category_description' => 'description'
            ],
            [
                'subcategory_category_id' => 5,
                'subcategory_name' => 'subcategory 5',
                'category_description' => 'description'
            ],
        ];

        DB::table('tbl_category')->insert($category);
    }
}
