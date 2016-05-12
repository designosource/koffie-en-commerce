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
    	DB::table('videos')->delete();

        $videos = [];

        DB::table('videos')->insert($videos);
    }
}
