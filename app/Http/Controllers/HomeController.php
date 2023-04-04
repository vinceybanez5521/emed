<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Schedule;
use App\Models\Specialty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    // public function index()
    // {
    //     return view('home');
    // }

    public function patientHome() {
        $patient = Patient::select()->where('user_id', Auth::user()->id)->get()->first();
        $appointmentsTotal = Appointment::select()->where('patient_id', $patient->id)->count();

        $is_complete = empty(trim($patient->full_name)) ? false : true;
        // dd($is_complete);

        return view('patient.home', ['appointmentsTotal' => $appointmentsTotal, 'is_complete' => $is_complete]);
    }

    public function doctorHome() {
        $doctor_id = Doctor::select()->where('user_id', Auth::user()->id)->get()->first()->id;
        
        $appointmentsTotal = Schedule
                                ::join('appointments', 'schedules.id', '=', 'appointments.schedule_id')
                                ->where('schedules.doctor_id', $doctor_id)
                                ->count();

        $schedulesTotal = Schedule::where('doctor_id', $doctor_id)->count();
        // dd($appointmentsTotal);
        return view('doctor.home', ['schedulesTotal' => $schedulesTotal, 'appointmentsTotal' => $appointmentsTotal]);
    }

    public function adminDashboard() {
        $specialtiesTotal = Specialty::all()->count();
        $doctorsTotal = Doctor::all()->count();
        $patientsTotal = Patient::all()->count();
        // dd($specialtiesTotal);
        return view('admin.dashboard', ['specialtiesTotal' => $specialtiesTotal, 'doctorsTotal' => $doctorsTotal, 'patientsTotal' => $patientsTotal]);
    }
}
