<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        return view('appointments.index', [
            'appointments' => Appointment::all()
        ]);
    }

    public function show(string $id)
    {
        return view('appointments.show', [
            'appointment' => Appointment::with(['cosmetologist', 'client'])->get()->where('id', $id)->first()
        ]);
    }


}
