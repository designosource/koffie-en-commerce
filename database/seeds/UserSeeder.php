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
        DB::table('tbl_users')->delete();

        $users = [
            [
                'user_name' => 'admin',
                'user_email' => 'info@designosource.be',
                'user_password' => 'designosource',
                'user_role' => 'admin',
            ],
        ];

        DB::table('tbl_users')->insert($users);
    }

}
