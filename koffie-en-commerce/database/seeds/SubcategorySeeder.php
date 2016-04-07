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

        $subcategory = [
            [
                'fk_category_id' => 1,
                'subcategory_name' => 'subcategory 1',
                'subcategory_description' => 'description'
            ],
            [
                'fk_category_id' => 1,
                'subcategory_name' => 'subcategory 2',
                'subcategory_description' => 'description'
            ],
            [
                'fk_category_id' => 1,
                'subcategory_name' => 'subcategory 3',
                'subcategory_description' => 'description'
            ],
            [
                'fk_category_id' => 1,
                'subcategory_name' => 'subcategory 4',
                'subcategory_description' => 'description'
            ],
            [
                'fk_category_id' => 1,
                'subcategory_name' => 'subcategory 5',
                'subcategory_description' => 'description'
            ],
            [
                'fk_category_id' => 4,
                'subcategory_name' => 'subcategory 6',
                'subcategory_description' => 'description'
            ],
            [
                'fk_category_id' => 4,
                'subcategory_name' => 'subcategory 7',
                'subcategory_description' => 'description'
            ],
            [
                'fk_category_id' => 5,
                'subcategory_name' => 'subcategory 8',
                'subcategory_description' => 'description'
            ],
            [
                'fk_category_id' => 5,
                'subcategory_name' => 'subcategory 5',
                'subcategory_description' => 'description'
            ],
        ];

        DB::table('tbl_subcategory')->insert($subcategory);
    }
}
