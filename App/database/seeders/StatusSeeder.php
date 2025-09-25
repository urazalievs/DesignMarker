<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Status::create([
            'name' => [
                'uz' => 'Yangi',
                'ru' => 'Новый',
            ],
            'code' => 'new',
            'for' => 'order',
        ]);
        Status::create([
            'name' => [
                'uz' => 'Tasdiqlangan',
                'ru' => 'Подтвержденный',
            ],
            'code' => 'confirmend',
            'for' => 'order',
        ]);
        Status::create([
            'name' => [
                'uz' => 'Jarayonda',
                'ru' => 'В процессе',
            ],
            'code' => 'pocessing',
            'for' => 'order',
        ]);
        Status::create([
            'name' => [
                'uz' => 'Yetkazilmoqda',
                'ru' => 'Доставляется',
            ],
            'code' => 'shipping',
            'for' => 'order',
        ]);
        Status::create([
            'name' => [
                'uz' => 'Yetkazildi',
                'ru' => 'Доставлен',
            ],
            'code' => 'delivered',
            'for' => 'order',
        ]);
        Status::create([
            'name' => [
                'uz' => 'To\'lov kutmoqda',
                'ru' => 'Ожидание оплаты',
            ],
            'code' => 'waiting_payment',
            'for' => 'order',
        ]);
        Status::create([
            'name' => [
                'uz' => 'To\'landi',
                'ru' => 'Оплачено',
            ],
            'code' => 'paid',
            'for' => 'order',
        ]);
        Status::create([
            'name' => [
                'uz' => 'To\'lov xatosi',
                'ru' => 'Ошибка оплаты',
            ],
            'code' => 'payment_error',
            'for' => 'order',
        ]);
        Status::create([
            'name' => [
                'uz' => 'Tugatildi',
                'ru' => 'Завершен',
            ],
            'code' => 'complited',
            'for' => 'order',
        ]);
        Status::create([
            'name' => [
                'uz' => 'Yopilgan',
                'ru' => 'Закрыт',
            ],
            'code' => 'closed',
            'for' => 'order',
        ]);
        Status::create([
            'name' => [
                'uz' => 'Bekor qilingan',
                'ru' => 'Отменен',
            ],
            'code' => 'canceled',
            'for' => 'order',
        ]);
        Status::create([
            'name' => [
                'uz' => 'Qaytarilgan',
                'ru' => 'Возвращен',
            ],
            'code' => 'returned',
            'for' => 'order',
        ]);
    }
}
