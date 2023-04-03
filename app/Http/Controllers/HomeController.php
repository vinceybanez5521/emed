<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Specialty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $patient_id = Patient::select()->where('user_id', Auth::user()->id)->get()->first()->id;
        $appointmentsTotal = Appointment::select()->where('patient_id', $patient_id)->count();
        return view('patient.home', ['appointmentsTotal' => $appointmentsTotal]);
    }

    public function doctorHome() {
        return view('doctor.home');
    }

    public function adminDashboard() {
        $specialtiesTotal = Specialty::all()->count();
        $doctorsTotal = Doctor::all()->count();
        $patientsTotal = Patient::all()->count();
        // dd($specialtiesTotal);
        return view('admin.dashboard', ['specialtiesTotal' => $specialtiesTotal, 'doctorsTotal' => $doctorsTotal, 'patientsTotal' => $patientsTotal]);
    }
}
