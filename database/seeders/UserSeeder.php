<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Евгения',
            'email' => 'evgenua@example.com',
            'password' => '$2y$10$FdNNUjF3ws2ejM8REfUwUeHLUM2657sD3QVNvpvFT0j4ATm8QjkVS',
            'is_admin' => true,
        ]);

        User::create([
            'name' => 'Алексей',
            'email' => 'alexey@example.com',
            'password' => '$2y$10$MOo6V6/VqBSV9qSh3ShTw.SCRHyqhsI1rfCWTp2K1lpw1cbLa88Gy',
            'is_admin' => false,
        ]);
    }
}
