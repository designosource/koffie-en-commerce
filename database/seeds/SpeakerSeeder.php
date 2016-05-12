<?php

use Illuminate\Database\Seeder;

class SpeakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_speaker')->delete();

        $speaker = [
            [
                'speaker_name' => 'Marijn',
                'speaker_title' => 'CEO',
                'speaker_email' => 'rut@mar.be',
                'speaker_image' => 'default.jpg',
                'speaker_description' => 'description',
            ],
            [
                'speaker_name' => 'Sara',
                'speaker_title' => 'specialist',
                'speaker_email' => 'Riano@sara.be',
                'speaker_image' => 'default.jpg',
                'speaker_description' => 'description',
            ],

        ];

        DB::table('tbl_speaker')->insert($speaker);
    }
}
