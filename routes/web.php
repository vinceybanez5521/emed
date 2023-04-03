<?php

use App\Http\Controllers\Admin\DoctorController as AdminDoctorController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\ApplyDoctorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Patient\DoctorController;
use App\Http\Controllers\SpecialtyController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/apply-doctor', [ApplyDoctorController::class, 'create'])->name('apply-doctor');
Route::post('/apply-doctor/store', [ApplyDoctorController::class, 'store'])->name('apply-doctor.store');

// Patient
Route::middleware(['auth', 'user-role:patient'])->group(function() {
    Route::get('/home', [HomeController::class, 'patientHome'])->name('patient.home');
    Route::get('/doctors', [DoctorController::class, 'index'])->name('patient.doctors');
});

// Doctor
Route::middleware(['auth', 'user-role:doctor'])->group(function() {
    Route::get('/doctor/home', [HomeController::class, 'doctorHome'])->name('doctor.home');
});

// Admin
Route::middleware(['auth', 'user-role:admin'])->group(function() {
    Route::get('/admin/dashboard', [HomeController::class, 'adminDashboard'])->name('admin.dashboard');
    
    // Specialties
    Route::get('/admin/specialties', [SpecialtyController::class, 'index'])->name('admin.specialties');
    Route::get('/admin/specialties/create', [SpecialtyController::class, 'create'])->name('admin.specialties.create');
    Route::post('/admin/specialties/store', [SpecialtyController::class, 'store'])->name('admin.specialties.store');
    Route::get('/admin/specialties/edit/{id}', [SpecialtyController::class, 'edit'])->name('admin.specialties.edit');
    Route::put('/admin/specialties/update/{id}', [SpecialtyController::class, 'update'])->name('admin.specialties.update');
    Route::delete('/admin/specialties/delete', [SpecialtyController::class, 'destroy'])->name('admin.specialties.delete');

    // Doctors
    Route::get('/admin/doctors', [AdminDoctorController::class, 'index'])->name('admin.doctors');

    // Patients
    Route::get('/admin/patients', [PatientController::class, 'index'])->name('admin.patients');
});

