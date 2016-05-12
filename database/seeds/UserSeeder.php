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
                'password' => 'designosource',
                'role' => 'admin',
            ],
        ];

        DB::table('users')->insert($users);
    }

}
