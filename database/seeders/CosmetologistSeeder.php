<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cosmetologist;

class CosmetologistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cosmetologist::insert([
            ['name' => 'Анна Иванова'],
            ['name' => 'Мария Смирнова'],
            ['name' => 'Елена Козлова'],
            ['name' => 'Светлана Петрова'],
            ['name' => 'Ирина Васильева'],
            ['name' => 'Наталья Федорова'],
            ['name' => 'Оксана Дергачева'],
        ]);
    }
}
