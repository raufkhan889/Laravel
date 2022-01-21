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
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => NULL,
                'name' => 'Rauf Khan',
                'email' => 'seller@ecom.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$f69Ii8VOweUaTKlrVlAXm.2M5/0s6MveyLU/cZZrrwNK6AtN2TPc.',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2021-11-27 06:11:24',
                'updated_at' => '2021-11-27 06:11:24',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 1,
                'name' => 'admin',
                'email' => 'admin@ecom.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$7yTG6uQzBqk7bOr8r/fIP.6gO.sokXiTgHFeXOVOeC40Ev.pm2KDW',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2021-11-27 10:34:00',
                'updated_at' => '2021-11-27 10:34:01',
            ),
        ));
        
        
    }
}