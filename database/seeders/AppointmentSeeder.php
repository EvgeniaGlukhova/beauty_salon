<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Appointment;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Appointment::insert([
            ['client_id' => 1, 'cosmetologist_id' => 1, 'start_time' => now(), 'end_time' => now()->addHour()],
            ['client_id' => 2, 'cosmetologist_id' => 2, 'start_time' => now(), 'end_time' => now()->addHour()],
            ['client_id' => 3, 'cosmetologist_id' => 3, 'start_time' => now(), 'end_time' => now()->addHour()],
        ]);
    }
}
