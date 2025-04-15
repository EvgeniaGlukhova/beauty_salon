<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CosmetologistServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cosmetologist_service')->insert([
            [
                'cosmetologist_id' => 1,
                'service_id' => 1,
                'price' => 1500.00,
                'quantity' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cosmetologist_id' => 1,
                'service_id' => 2,
                'price' => 2000.00,
                'quantity' => 90,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cosmetologist_id' => 2,
                'service_id' => 3,
                'price' => 1800.00,
                'quantity' => 75,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
