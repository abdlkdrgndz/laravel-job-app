<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DeviceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * 10.000 adet kayıt oluşturalım.
         */
        \App\Models\Device::factory(10000)->create();
    }
}
