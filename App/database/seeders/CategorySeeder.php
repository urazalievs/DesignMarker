<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'name' => [
                'uz' => 'Stol',
                'ru' => 'Стол',
            ],
        ]);
        Category::create([
            'name' => [
                'uz' => 'Divan',
                'ru' => 'Диван',
            ],
        ]);
        Category::create([
            'name' => [
                'uz' => 'Stul',
                'ru' => 'Стул',
            ],
        ]);
        Category::create([
            'name' => [
                'uz' => 'Crovat',
                'ru' => 'Кровать',
            ],
        ]);
        Category::create([
            'name' => [
                'uz' => 'Popular',
                'ru' => 'Популярный',
            ],
        ]);
    }
}
