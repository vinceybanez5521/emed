<?php

namespace App\Http\Controllers;

use App\Models\Specialty;
use Illuminate\Http\Request;

class SpecialtyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Specialty::paginate(10);
        $data->appends(request()->all());
        $i = $data->firstItem();
        return view('admin.specialty.index', ['specialties' => $data, 'i' => $i]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.specialty.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'unique:specialties', 'max:255'],
            'description' => ['max:255'],
        ]);

        $data = $request->all();

        $specialty = Specialty::create($data);

        if($specialty) {
            return redirect()->route('admin.specialties')->with('msg', 'Specialty added successfully!')->with('status', 'success');
        } else {
            return redirect()->back()->with('msg', 'Failed to add specialty!')->with('status', 'danger');
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
        $data = Specialty::findOrFail($id);
        return view('admin.specialty.edit', ['specialty' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', `unique:specialties,{$id}`, 'max:255'],
            'description' => ['max:255'],
        ]);

        $data = $request->all();

        $specialty = Specialty::findOrFail($id);
        $specialty->update($data);

        if($specialty) {
            return redirect()->route('admin.specialties')->with('msg', 'Specialty updated successfully!')->with('status', 'success');
        } else {
            return redirect()->back()->with('msg', 'Failed to update specialty!')->with('status', 'danger');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        if(Specialty::destroy($request->specialty_id)) {
            return redirect()->route('admin.specialties')->with('msg', 'Specialty deleted successfully!')->with('status', 'success');
        } else {
            return redirect()->back()->with('msg', 'Failed to delete specialty!')->with('status', 'danger');
        }
    }
}
