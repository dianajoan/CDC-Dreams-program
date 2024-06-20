<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
                'material_name' => 'HIV Prevention Booklet',
                'target_age_group' => '10-14',
                'status' => 'active',
                'photo' => 'public/images/hiv.jpg',
                'slug' => Str::slug('HIV'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'material_name' => 'Sewing Guide',
                'target_age_group' => '15-19',
                'status' => 'inactive',
                'photo' => 'public/images/sewing.jpg',
                'slug' => Str::slug('Sewing'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more records as needed
        ]);
    }
}
