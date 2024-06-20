<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
                'skill_name' => 'Sewing',
                'status' => 'active',
                'slug' => Str::slug('Sewing'),
                'photo' => 'public/images/sewing.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'skill_name' => 'Cooking',
                'status' => 'inactive',
                'slug' => Str::slug('Cooking'),
                'photo' => 'public/images/cooking.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'skill_name' => 'Teaching',
                'status' => 'active',
                'slug' => Str::slug('Teaching'),
                'photo' => 'public/images/teaching.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'skill_name' => 'Driving',
                'status' => 'inactive',
                'slug' => Str::slug('Driving'),
                'photo' => 'public/images/driving.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more records as needed
        ]);
    }
}
