<?php

namespace Database\Seeders;

use App\Models\Reminder;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ReminderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reminder::create([
            'lead_id' => 1,
            'user_id' => 1,
            'reminder' => 'A reminder to call customer again.',
            'reminder_date' => Carbon::now()->addDay(2),
            'status' => 'pending'
        ]);

        Reminder::create([
            'lead_id' => 2,
            'user_id' => 2,
            'reminder' => 'A reminder to call customer on his request.',
            'reminder_date' => Carbon::now()->addDay(3),
            'status' => 'pending'
        ]);
    }
}
