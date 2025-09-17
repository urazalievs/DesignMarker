<?php

namespace Database\Seeders;

use App\Models\DeliveryMethods;
use Illuminate\Database\Seeder;

class DeliveryMethodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DeliveryMethods::create([
            'name' => [
                'uz' => 'Tekin',
                'ru' => 'Бесплатно'
            ],
            'estimated_time' => [
                'uz' => '5 kun',
                'ru' => '5 дня'
            ],
            'sum' => 0
        ]);
        DeliveryMethods::create([
            'name' => [
                'uz' => 'Standart',
                'ru' => 'Standart'
            ],
            'estimated_time' => [
                'uz' => '3 kun',
                'ru' => '3 дня'
            ],
            'sum' => 40000
        ]);
        DeliveryMethods::create([
            'name' => [
                'uz' => 'Tez',
                'ru' => 'Быстро'
            ],
            'estimated_time' => [
                'uz' => '1 kun',
                'ru' => '1 день'
            ],
            'sum' => 80000
        ]);
    }
}
