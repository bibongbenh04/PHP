<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NurseDashboardController extends Controller
{
    public function viewSchedule()
    {
        // Logic to display schedule
        return view('nurse.schedule');
    }

    public function manageAppointments()
    {
        // Logic to manage appointments
        return view('nurse.appointments');
    }

    public function patientRecords()
    {
        // Logic to view patient records
        return view('nurse.records');
    }
}
