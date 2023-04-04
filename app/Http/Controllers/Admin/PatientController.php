<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request['search'];
        
        if(!empty($search)) {
            $data = Patient::where('first_name', 'LIKE' , $search . '%')
                            ->orWhere('last_name', 'LIKE' , $search . '%')
                            ->paginate(10);
            $data->appends($request->all());
            $total = Patient::all()->count();
            $i = $data->firstItem();
            return view('admin.patient.index', ['patients' => $data, 'i' => $i, 'total' => $total]);
        } else {
            $data = Patient::paginate(10);
            $total = Patient::all()->count();
            $i = $data->firstItem();
            return view('admin.patient.index', ['patients' => $data, 'i' => $i, 'total' => $total]);
        }
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
