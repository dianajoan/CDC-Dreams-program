<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Report;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Report::insert([
            [
                'report_type' => 'Monthly Progress',
                'description' => 'Report on the progress of the girls for the month of June',
            ],
            [
                'report_type' => 'Annual Impact',
                'description' => 'Annual impact report of the CDC Dreams program',
            ],
            // Add more records as needed
        ]);

    }
}
