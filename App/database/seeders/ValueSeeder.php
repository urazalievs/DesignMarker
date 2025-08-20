<?php

namespace Database\Seeders;

use App\Models\Value;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    public function run(): void
    {
        Value::create([
            'attribute_id' => 1,
            'name' => [
                'uz' => 'Qizil',
                'ru' => 'Красный',
                'en' => 'Red',
            ],
        ]);
        Value::create([
            'attribute_id' => 1,
            'name' => [
                'uz' => 'Qora',
                'ru' => 'Черный',
                'en' => 'Black',
            ],
        ]);
        Value::create([
            'attribute_id' => 1,
            'name' => [
                'uz' => 'Jigarrang',
                'ru' => 'Коричневый',
                'en' => 'Brown',
            ],
        ]);
        Value::create([
            'attribute_id' => 2,
            'name' => [
                'uz' => 'MDF',
                'ru' => 'МДФ',
                'en' => 'MDF',
            ],
        ]);
        Value::create([
            'attribute_id' => 2,
            'name' => [
                'uz' => 'LDSP',
                'ru' => 'ЛДСП',
                'en' => 'LDSP',
            ],
        ]);

    }
}
