<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            [
                'event_type' => 'Workshop',
                'learning_outcomes' => 'Understanding the basics of Laravel',
                'start_date' => '2024-07-01',
                'end_date' => '2024-07-02',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'event_type' => 'Seminar',
                'learning_outcomes' => 'Advanced Laravel techniques',
                'start_date' => '2024-08-15',
                'end_date' => '2024-08-16',
                'status' => 'inactive',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more records as needed
        ]);
    }
}
