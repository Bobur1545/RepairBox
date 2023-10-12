<?php

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
        $this->call(UserRoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(LanguageSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(RepairPrioritySeeder::class);
        $this->call(RepairStatusSeeder::class);
        $this->call(CustomPageSeeder::class);
        $this->call(FaqSeeder::class);
    }
}
