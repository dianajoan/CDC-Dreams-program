<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdminRoleSeeder::class,
            UsersTableSeeder::class,
            BannersTableSeeder::class,
            GirlsTableSeeder::class,
            EventsTableSeeder::class,
            ProgressTableSeeder::class,
            MaterialsTableSeeder::class,
            SkillsTableSeeder::class,
            ReportSeeder::class,
        ]);
    }
}
