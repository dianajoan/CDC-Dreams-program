<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('progress')->insert([
            [
                'girl_id' => 1,
                'event_id' => 1,
                'lessons_attended' => '5',
                'skills_attained' => 'Basic Laravel skills',
                'finish_without_hiv' => true,
                'standalone_in_community' => false,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'girl_id' => 2,
                'event_id' => 2,
                'lessons_attended' => '3',
                'skills_attained' => 'Advanced Laravel techniques',
                'finish_without_hiv' => true,
                'standalone_in_community' => true,
                'status' => 'inactive',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more records as needed
        ]);
    }
}
