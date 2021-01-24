<?php

namespace Database\Seeders;

use Database\Factories\DeviceFactory;
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
        $this->call(DeviceTableSeeder::class);
    }
}
