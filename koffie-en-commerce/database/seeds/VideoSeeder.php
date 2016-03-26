<?php

use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_video')->insert([
        	'video_title' => 'One',
        	'video_description' => 'Description'
        ]);
    }
}
