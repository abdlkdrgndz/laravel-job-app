<?php

namespace Database\Factories;

use App\Models\Device;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DeviceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Device::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'device_id' => Str::random(20),
            'app_id' => Str::random(20),
            'os' => $this->generateOs(),
            'language' => $this->generateLang(),
            'receipt' => $this->generateReceipt(),
            'status' => $this->generateStatus(),
            'expire_date' => $this->faker->dateTimeBetween('now', '+5 years')
        ];
    }

    /**
     * Generate Os.
     *
     * @return mixed
     */
    private function generateOs()
    {
        $os = ['ios', 'android'];

        return $os[rand(0, 1)];
    }

    /**
     * Generate Lang.
     *
     * @return mixed
     */
    private function generateLang()
    {
        $lang = ['tr', 'ru'];

        return $lang[rand(0, 1)];
    }

    /**
     * Generate Status.
     *
     * @return mixed
     */
    private function generateStatus()
    {
        $status = [Device::STATUS_ACTIVE, Device::STATUS_PASSIVE, Device::STATUS_CANCEL];

        return $status[rand(0, 2)];
    }

    /**
     * Generate Receipt.
     *
     * @return string
     */
    private function generateReceipt()
    {
        return uniqid() . rand(10, 99);
    }
}
