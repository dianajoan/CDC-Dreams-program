<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materials')->insert([
            [
                'material_name' => 'Introduction to Laravel',
                'target_audience' => 'Beginners',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'material_name' => 'Advanced Laravel Techniques',
                'target_audience' => 'Experienced Developers',
                'status' => 'inactive',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more records as needed
        ]);
    }
}
