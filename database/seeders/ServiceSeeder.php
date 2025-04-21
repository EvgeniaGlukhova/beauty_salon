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
        ]);
    }
}
