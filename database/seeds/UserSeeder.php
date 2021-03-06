<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $users = [
            [
                'name' => 'admin',
                'email' => 'info@designosource.be',
                'password' => bcrypt('designosource'),
                'role' => 'admin',
            ],
            [
                'name' => 'lucastest',
                'email' => 'lpoignonnec@gmail.com',
                'password' => bcrypt('designosource'),
                'role' => 'admin',
            ],
            [
                'name' => 'memori',
                'email' => 'info@memori.be',
                'password' => bcrypt('memori'),
                'role' => 'admin',
            ],
        ];

        DB::table('users')->insert($users);
    }

}
