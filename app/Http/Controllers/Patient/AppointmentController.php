<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patient_id = Patient::select()->where('user_id', Auth::user()->id)->get()->first()->id;
        $data = Appointment::
                    where('patient_id', $patient_id)
                    ->paginate(10);
        $i = $data->firstItem();
        // dd($data->first()->schedule_id);
        return view('patient.appointment.index', ['appointments' => $data, 'i' => $i]);
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
        $data = $request->all();
        $data['patient_id'] = Patient::select()->where('user_id', Auth::user()->id)->get()->first()->id;
        $data['status'] = 0;
        // dd($data);

        $appointment_exists = Appointment::select()
                                            ->where('patient_id', $data['patient_id'])
                                            ->where('status', 0)
                                            ->count();

        if($appointment_exists > 0) {
            return redirect()->back()->with('msg', 'You have a pending appointment. You are allowed to set only 1 appointment')->with('status', 'danger');
        }

        $appointment = Appointment::create($data);

        if($appointment) {
            return redirect()->route('patient.appointments')->with('msg', 'Appointment added successfully!')->with('status', 'success');
        } else {
            return redirect()->back()->with('msg', 'Failed to add appointment!')->with('status', 'danger');
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
    public function destroy(Request $request)
    {
        if(Appointment::destroy($request->id)) {
            return redirect()->route('patient.appointments')->with('msg', 'Appointment deleted successfully!')->with('status', 'success');
        } else {
            return redirect()->back()->with('msg', 'Failed to delete appointment!')->with('status', 'danger');
        }
    }
}
