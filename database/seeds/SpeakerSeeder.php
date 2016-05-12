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
        DB::table('speakers')->delete();

        $speaker = [
            [
                'name' => 'Marijn',
                'title' => 'CEO',
                'email' => 'rut@mar.be',
                'avatar' => null,
                'description' => 'description'
            ],
            [
                'name' => 'Sara',
                'title' => 'specialist',
                'email' => 'riano@sara.be',
                'avatar' => null,
                'description' => 'description'
            ],
            [
                'name' => 'Jasper De Smet',
                'title' => 'CTO',
                'email' => 'hello@jasperdesmet.be',
                'avatar' => null,
                'description' => 'description'
            ]
        ];

        DB::table('speakers')->insert($speaker);
    }
}
