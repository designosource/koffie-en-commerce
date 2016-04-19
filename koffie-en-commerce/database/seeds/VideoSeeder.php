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
    	DB::table('tbl_video')->delete();

    	$videos = [
    		['video_title' => 'One', 'video_description' => 'Description', 'video_url' => '58010546'],
    		['video_title' => 'Two', 'video_description' => 'Description', 'video_url' => '58010546'],
    		['video_title' => 'Three', 'video_description' => 'Description', 'video_url' => '58010546'],
    		['video_title' => 'Four', 'video_description' => 'Description', 'video_url' => '58010546'],
    		['video_title' => 'Five', 'video_description' => 'Description', 'video_url' => '58010546'],
    		['video_title' => 'Six', 'video_description' => 'Description', 'video_url' => '58010546']
    	];

        DB::table('tbl_video')->insert($videos);
    }
}
