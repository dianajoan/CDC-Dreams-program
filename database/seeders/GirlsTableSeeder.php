<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GirlsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('girls')->insert([
            [
                'name' => 'Jane Doe',
                'address' => '123 Main St',
                'age_group' => '10-14',
                'hiv_status' => 'Negative',
                'date_of_birth' => '2010-05-15',
                'village' => 'Village A',
                'schooling_status' => 'in_school',
                'status' => 'active',
                'slug' => Str::slug('Jane Doe'),
                'photo' => 'public/images/jane.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mary Smith',
                'address' => '456 Another St',
                'age_group' => '15-19',
                'hiv_status' => 'Positive',
                'date_of_birth' => '2006-08-25',
                'village' => 'Village B',
                'schooling_status' => 'out_of_school',
                'status' => 'inactive',
                'slug' => Str::slug('Mary Smith'),
                'photo' => 'public/images/mary.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more records as needed
        ]);
    }
}
