<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Specialty;
use Illuminate\Http\Request;

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
        return view('patient.home');
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
