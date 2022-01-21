<?php

namespace Database\Seeders;

use App\Models\Lead;
use App\Models\Reminder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(LeadSeeder::class);
        $this->call(ReminderSeeder::class);
    }
}
