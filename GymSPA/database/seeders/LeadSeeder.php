<?php

namespace Database\Seeders;

use App\Models\Lead;
use Illuminate\Database\Seeder;

class LeadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lead::create([
            'name' => 'Wing Kline',
            'email' => 'kovehymi@mailinator.com',
            'phone' => '+1 (257) 956-8825',
            'package' => 'Daily',
            'dob' => '1993-12-07',
            'age' => '56',
            'branch_id' => 1,
            'added_by' => 1
        ]);

        Lead::create([
            'name' => 'John Mart',
            'email' => 'johnmart@mailinator.com',
            'phone' => '+1 (257) 000-8825',
            'package' => 'Monthly',
            'dob' => '2000-09-07',
            'age' => '25',
            'branch_id' => 1,
            'added_by' => 1
        ]);

        Lead::create([
            'name' => 'chin Kung',
            'email' => 'chinkung@mailinator.com',
            'phone' => '+1 (895) 956-8825',
            'package' => 'Yearly',
            'dob' => '1995-12-08',
            'age' => '66',
            'branch_id' => 1,
            'added_by' => 2
        ]);
    }
}
