<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Doctor\CreateDoctorRequest;
use App\Http\Requests\Doctor\UpdateDoctorRequest;
use App\Models\TimeSchedule;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Appointment;

class DoctorDashboardController extends Controller
{
    public function viewSchedule()
    {
        // Logic to display schedule
        return view('doctor.schedule');
    }

    public function manageAppointments()
    {
        if (!auth()->check() || !auth()->user()) {
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để truy cập chức năng này.');
        }

        $user = auth()->user();

        if ($user->type == 'doctor') {
            $appointments = \App\Models\Appointment::where('doctor_id', $user->id)->with('patient')->paginate(10);

            $statuses = ['pending', 'confirmed', 'cancelled', 'treated'];
            $statusAppointments = [];

            foreach ($statuses as $status) {
                $statusAppointments[$status] = \App\Models\Appointment::where('doctor_id', $user->id)
                    ->where('status', $status)
                    ->with('patient')
                    ->get();
            }

            return view('appointments.list', compact('appointments'))
                ->with('pendingAppointments', $statusAppointments['pending'])
                ->with('confirmedAppointments', $statusAppointments['confirmed'])
                ->with('cancelledAppointments', $statusAppointments['cancelled'])
                ->with('treatedAppointments', $statusAppointments['treated']);
        }

        // Nếu là bệnh nhân: chỉ xem được cuộc hẹn của chính mình
        if ($user->type === 'patient') {
            $appointments = \App\Models\Appointment::where('patient_id', $user->id)->with('doctor')->paginate(10);

            return view('appointments.list', compact('appointments'))
                ->with('pendingAppointments', collect())
                ->with('confirmedAppointments', collect())
                ->with('cancelledAppointments', collect())
                ->with('treatedAppointments', collect());
        }

        // Trường hợp vai trò khác, không hợp lệ
        return redirect()->back()->with('error', 'Bạn không có quyền truy cập chức năng này.');
    }


    public function patientRecords()
    {
        // Logic to view patient records
        return view('doctor.records');
    }

    public function createAppointment(Request $request)
    {
        // Logic to create a new appointment
        // Validate and save appointment data
        return redirect()->route('doctor.appointments');
    }

    public function editAppointment($id)
    {
        // Logic to edit an existing appointment
        // Retrieve and update appointment data
        return view('doctor.edit_appointment', compact('appointment'));
    }

    public function cancelAppointment($id)
    {
        // Logic to cancel an appointment
        // Update appointment status
        return redirect()->route('doctor.appointments');
    }
}
