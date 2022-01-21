<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Rauf Khan',
            'email' => 'admin@test.com',
            'password' => Hash::make('password')
        ]);

        User::create([
            'name' => 'Eqra Khan',
            'email' => 'admin2@test.com',
            'password' => Hash::make('password')
        ]);
    }
}
