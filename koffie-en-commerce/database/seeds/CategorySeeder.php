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
                'category_name' => 'financieren'
            ],
            [
                'category_name' => 'produceren'
            ],
            [
                'category_name' => 'vermarkten'
            ],
            [
                'category_name' => 'juridisch scherpstellen'
            ],
            [
                'category_name' => 'internationaliseren'
            ],
        ];

        DB::table('tbl_category')->insert($category);
    }
}
