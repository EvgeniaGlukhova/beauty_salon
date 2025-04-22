<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::insert([
            ['name' => 'Массаж лица', 'price' => 1500.00, 'cosmetologist_id' => 1],
            ['name' => 'Чистка кожи', 'price' => 2000.00, 'cosmetologist_id' => 1],
            ['name' => 'Пилинг', 'price' => 1800.00, 'cosmetologist_id' => 1],
            ['name' => 'Уход за кожей', 'price' => 1200.00, 'cosmetologist_id' => 2],
            ['name' => 'Антицеллюлитный массаж', 'price' => 2200.00, 'cosmetologist_id' => 2],
            ['name' => 'Массаж спины', 'price' => 2500.00, 'cosmetologist_id' => 2],
            ['name' => 'Спа-процедуры для тела', 'price' => 3000.00, 'cosmetologist_id' => 3],
            ['name' => 'Увлажняющий уход', 'price' => 1800.00, 'cosmetologist_id' => 3],
            ['name' => 'Омолаживающий уход', 'price' => 3500.00, 'cosmetologist_id' => 3],
            ['name' => 'Лазерная эпиляция лица', 'price' => 4000.00, 'cosmetologist_id' => 4],
            ['name' => 'Лазерная эпиляция тела', 'price' => 5000.00, 'cosmetologist_id' => 4],
            ['name' => 'Мезотерапия для лица', 'price' => 2500.00, 'cosmetologist_id' => 5],
            ['name' => 'Мезотерапия для тела', 'price' => 3000.00, 'cosmetologist_id' => 5],
            ['name' => 'Пилинг для лица', 'price' => 2000.00, 'cosmetologist_id' => 6],
            ['name' => 'Чистка лица с массажем', 'price' => 2200.00, 'cosmetologist_id' => 6],
        ]);
    }
}
