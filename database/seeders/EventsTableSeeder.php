<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
                'learning_outcomes' => 'Learned about HIV prevention',
                'start_date' => '2024-06-01',
                'end_date' => '2024-06-02',
                'status' => 'active',
                'location' => 'Uganda',
                'photo' => 'public/images/work.jpg',
                'slug' => Str::slug('Workshop'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'event_type' => 'Training',
                'learning_outcomes' => 'Gained sewing skills',
                'start_date' => '2024-07-10',
                'end_date' => '2024-07-12',
                'status' => 'inactive',
                'location' => 'Kenya',
                'photo' => 'public/images/seminar.jpg',
                'slug' => Str::slug('Seminar'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more records as needed
        ]);
    }
}
