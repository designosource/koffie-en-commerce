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
        DB::table('categories')->delete();

        $category = [
            [
                'name' => 'financieren',
                'description' => 'description',
                'slug' => 'financieren'
            ],
            [
                'name' => 'produceren',
                'description' => 'description',
                'slug' => 'produceren'
            ],
            [
                'name' => 'vermarkten',
                'description' => 'description',
                'slug' => 'vermarkten'
            ],
            [
                'name' => 'juridisch scherpstellen',
                'description' => 'description',
                'slug' => 'juridisch_scherpstellen'
            ],
            [
                'name' => 'internationaliseren',
                'description' => 'description',
                'slug' => 'internationaliseren'
            ],
            [
                'name' => 'ondernemen',
                'description' => 'description',
                'slug' => 'ondernemen'
            ]
        ];

        DB::table('categories')->insert($category);
    }
}
