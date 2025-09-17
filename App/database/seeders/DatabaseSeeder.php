<?php

namespace Database\Seeders;

use Faker\Provider\ar_EG\Address;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            AttributeSeeder::class,
            ValueSeeder::class,
            ProductSeeder::class,
            DeliveryMethodsSeeder::class,
            PaymentTypeSeeder::class,
            UserAddressSeeder::class,
        ]);

    }
}
