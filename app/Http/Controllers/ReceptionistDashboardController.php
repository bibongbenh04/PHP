<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReceptionistDashboardController extends Controller
{
    public function scheduleAppointments()
    {
        // Logic to schedule appointments
        return view('receptionist.schedule');
    }

    public function patientRegistration()
    {
        // Logic to register patients
        return view('receptionist.registration');
    }
}
