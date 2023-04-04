<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Schedule::join('doctors', 'doctors.id', '=', 'schedules.doctor_id')
                        ->leftJoin('appointments', 'appointments.schedule_id', '=', 'schedules.id')
                        ->select('schedules.*', DB::raw('count(appointments.id) as total'))
                        ->groupBy('schedules.id')
                        ->paginate(10);     
        // dd($data);   
        $i = $data->firstItem();

        $totalSchedules = Schedule::all()->count();
        
        return view('admin.schedule.index', ['schedules' => $data, 'i' => $i, 'totalSchedules' => $totalSchedules]);
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
