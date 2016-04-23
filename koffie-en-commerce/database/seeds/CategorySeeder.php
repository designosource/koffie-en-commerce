<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_category')->delete();

        $category = [
            [
                'category_name' => 'financieren',
                'maincategory_id' =>'1',
                'category_description' => 'description'
            ],
            [
                'category_name' => 'produceren',
                'maincategory_id' =>'1',
                'category_description' => 'description'
            ],
            [
                'category_name' => 'vermarkten',
                'maincategory_id' =>'1',
                'category_description' => 'description'
            ],
            [
                'category_name' => 'juridisch scherpstellen',
                'maincategory_id' =>'1',
                'category_description' => 'description'
            ],
            [
                'category_name' => 'internationaliseren',
                'maincategory_id' =>'1',
                'category_description' => 'description'
            ],
            [
                'category_name' => 'Ondernemen',
                'maincategory_id' =>'1',
                'category_description' => 'description'
            ],
        ];

        DB::table('tbl_category')->insert($category);
    }
}
