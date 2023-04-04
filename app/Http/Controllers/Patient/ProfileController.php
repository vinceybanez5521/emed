<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patient = Patient::where('user_id', Auth::user()->id)->get()->first();
        // dd($patient);
        return view('patient.profile.index', ['patient' => $patient]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit()
    {
        $patient = Patient::where('user_id', Auth::user()->id)->get()->first();
        return view('patient.profile.edit', ['patient' => $patient]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "first_name" => ['required', 'max:255'],
            "middle_name" => ['max:255'],
            "last_name" => ['required', 'max:255'],
            "address" => ['required', 'max:255'],
            "civil_status" => ['required'],
            "date_of_birth" => ['required'],
            "phone_number" => ['required', 'min:11', 'max:11', `unique:doctors,$id`],
            "photo" => ['image', 'mimes:jpeg,jpg,png', 'max:2048'],
        ]);

        $data = $request->all();

        if($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photo->store('photo_uploads', 'public');
            $data['photo'] = $photo->hashName();
        }

        $patient = Patient::where('id', $id)->get()->first();
        $update = $patient->update($data);

        if($update) {
            return redirect()->route('patient.profile')->with('msg', 'Account updated successfully!')->with('status', 'success');
        } else {
            return redirect()->back()->with('msg', 'Failed to update account!')->with('status', 'danger');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
