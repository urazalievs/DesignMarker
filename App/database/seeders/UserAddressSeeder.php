<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserAddressSeeder extends Seeder
{
    public function run(): void
    {
        User::find(2)->addresses()->create([
            "latitude" => "41.304763",
            "longitude" => "69.199670",
            "region" => "Ташкент",
            "district" => "Учтепинский район",
            "street" => "Чукуркуприк",
            "home" => "59",
        ]);
        
        User::find(2)->addresses()->create([
            "latitude" => "41.304766",
            "longitude" => "69.199675",
            "region" => "Ташкент",
            "district" => "Сергелинский район",
            "street" => "Автосалон",
            "home" => "46",
        ]);
    }
}
