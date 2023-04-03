<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApplyDoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('apply-doctor');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "first_name" => ['required', 'max:255'],
            "middle_name" => ['max:255'],
            "last_name" => ['required', 'max:255'],
            "address" => ['required', 'max:255'],
            "civil_status" => ['required'],
            "date_of_birth" => ['required'],
            "phone_number" => ['required', 'min:11', 'max:11', 'unique:doctors'],
            "prc_license_number" => ['required', 'min:8', 'max:8', 'unique:doctors'],
            "email" => ['required', 'email', 'unique:users', 'max:255'],
            "password" => ['required', 'confirmed', 'min:8', 'max:15'],
            "photo" => ['image', 'mimes:jpeg,jpg,png', 'max:2048'],
            "prc_photo" => ['required', 'image', 'mimes:jpeg,jpg,png', 'max:2048'],
        ]);

        $data = $request->all();
        // dd($data);

        try {
            $loginData['email'] = $data['email'];
            $loginData['password'] = Hash::make($data['password']);
            $loginData['role'] = 1;

            $user = User::create($loginData);

            if(!$user) {
                return redirect()->back()->with('msg', 'Application Error!')->with('status', 'danger');
            } 

            $data['user_id'] = $user->id;

            if($request->hasFile('photo')) {
                $photo = $request->file('photo');
                $photo->store('photo_uploads', 'public');
                $data['photo'] = $photo->hashName();
            }

            if($request->hasFile('prc_photo')) {
                $prc_photo = $request->file('prc_photo');
                $prc_photo->store('prc_uploads', 'public');
                $data['prc_photo'] = $prc_photo->hashName();
            }

            $doctor = Doctor::create($data);

            if($doctor) {
                return redirect()->route('login')->with('msg', 'Application success!')->with('status', 'success');
            } else {
                $user->delete();
                return redirect()->back()->with('msg', 'Application error!')->with('status', 'danger');
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
