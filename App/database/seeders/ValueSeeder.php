<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\Value;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    public function run(): void
    {
        $attribute = Attribute::find(1);

        $attribute->values()->create([
            'name' => [
                'uz' => 'Qizil',
                'ru' => 'Красный',
                'en' => 'Red',
            ],
        ]);
        $attribute->values()->create([
            'name' => [
                'uz' => 'Qora',
                'ru' => 'Черный',
                'en' => 'Black',
            ],
        ]);
        $attribute->values()->create([
            'name' => [
                'uz' => 'Jigarrang',
                'ru' => 'Коричневый',
                'en' => 'Brown',
            ],
        ]);

        $attribute = Attribute::find(2);

        $attribute->values()->create([
            'name' => [
                'uz' => 'MDF',
                'ru' => 'МДФ',
                'en' => 'MDF',
            ],
        ]);
        $attribute->values()->create([
            'name' => [
                'uz' => 'LDSP',
                'ru' => 'ЛДСП',
                'en' => 'LDSP',
            ],
        ]);

    }
}
