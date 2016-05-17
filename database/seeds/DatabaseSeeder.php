<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call(CategorySeeder::class);
        $this->call(UserSeeder::class);
        $this->call(SpeakerSeeder::class);
    	Model::unguard();
        $this->call(VideoSeeder::class);
        Model::reguard();
    }
}