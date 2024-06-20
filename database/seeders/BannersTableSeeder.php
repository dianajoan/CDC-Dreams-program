<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Generate dummy data for banners
        $banners = [
            [
                'title' => 'Banner 1',
                'slug' => Str::slug('Banner 1'),
                'photo' => 'banner1.jpg',
                'subtitle' => 'Banner 1 subtitle',
                'button' => 'Click Here',
                'link' => 'https://example.com/banner1',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Banner 2',
                'slug' => Str::slug('Banner 2'),
                'photo' => 'banner2.jpg',
                'subtitle' => 'Banner 2 subtitle',
                'button' => 'Learn More',
                'link' => 'https://example.com/banner2',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more banners as needed
        ];

        // Insert data into banners table
        DB::table('banners')->insert($banners);
    }
}
