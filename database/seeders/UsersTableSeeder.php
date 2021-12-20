<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2a$12$QECKFuOMw38Hbnx6hYGhE.mKWHlI/gmNm62n1oooESQDgaVY/VX7m',
                'remember_token' => NULL,
                'role' => 'admin',
                'created_at' => NULL,
                'updated_at' => '2021-08-26 23:44:48',
            ),
        ));
    }
}
