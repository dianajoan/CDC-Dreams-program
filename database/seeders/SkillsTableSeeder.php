<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            [
                'skill_name' => 'Laravel',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'skill_name' => 'PHP',
                'status' => 'inactive',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'skill_name' => 'JavaScript',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'skill_name' => 'Vue.js',
                'status' => 'inactive',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more records as needed
        ]);
    }
}
