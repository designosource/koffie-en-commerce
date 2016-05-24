<?php

use Illuminate\Database\Seeder;

class RelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_video')->delete();

        $cat_vid = [
            [
                'category_id' => 1,
                'video_id' => 1
            ],
            [
                'category_id' => 2,
                'video_id' => 1
            ],
            [
                'category_id' => 2,
                'video_id' => 2
            ]
        ];

        DB::table('category_video')->insert($cat_vid);
    }
}
