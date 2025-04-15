<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ClientServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('client_service')->insert([
            [
                'client_id' => 1,
                'service_id' => 1,
                'quantity' => 2,
                'price' => 3000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'client_id' => 2,
                'service_id' => 2,
                'quantity' => 1,
                'price' => 2000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'client_id' => 3,
                'service_id' => 3,
                'quantity' => 3,
                'price' => 5400.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
