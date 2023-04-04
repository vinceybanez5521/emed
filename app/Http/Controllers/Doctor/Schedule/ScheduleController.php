<?php

namespace App\Http\Controllers\Doctor\Schedule;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctor_id = Doctor::select()->where('user_id', Auth::user()->id)->get()->first()->id;

        $data = Schedule
                    ::leftJoin('appointments', 'schedules.id', '=', 'appointments.schedule_id')
                    ->select('schedules.id', 'schedules.date', 'schedules.status', DB::raw('count(appointments.id) as total'))
                    ->groupBy('schedules.id')
                    ->where('schedules.doctor_id', $doctor_id)
                    ->orderBy('schedules.date')
                    ->paginate(10);

        // dd($data);

        $i = $data->firstItem();
        return view('doctor.schedule.index', ['schedules' => $data, 'i' => $i]);
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
        $request->validate([
            'date' => ['required', 'unique:schedules'],
        ]);

        $data = $request->all();
        $data['doctor_id'] = Doctor::select()->where('user_id', Auth::user()->id)->get()->first()->id;
        // dd($data);

        $schedule = Schedule::create($data);

        if($schedule) {
            return redirect()->route('doctor.schedules')->with('msg', 'Schedule added successfully!')->with('status', 'success');
        } else {
            return redirect()->back()->with('msg', 'Failed to add schedule!')->with('status', 'danger');
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
