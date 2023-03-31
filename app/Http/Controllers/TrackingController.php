<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Employee;
use App\Models\Tracking;
use App\Models\Departement;
use Illuminate\Http\Request;
use App\Models\TrackingImage;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TrackingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard', [
            'trackings' => Tracking::all(),
            'statuses' => Status::all(),
            'departements' => Departement::all(),
            'employees' => Employee::all(),
        ]);
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
        // validasi input dari form
        $validatedData = $request->validate([
            'po_number' => 'required',
            'employee_id' => 'required',
            'departement_id' => 'required',
            'status_id' => 'required',
            'date' => 'required',
            'description' => 'required',
            'image' => 'required|image|file|max:3024',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('tracking-images');
        }

        Tracking::create($validatedData);

        return back()->with('success', 'Data berhasil ditambahkan!');
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
    public function update(Request $request, $id)
    {

        $tracking = Tracking::find($id);
        $tracking->po_number = $request->input('po_number');
        $tracking->employee_id = $request->input('employee_id');
        $tracking->departement_id = $request->input('departement_id');
        $tracking->status_id = $request->input('status_id');
        $tracking->date = $request->input('date');
        $tracking->description = $request->input('description');

        $tracking->update();

        return redirect()->back()->with('success', 'Data berhasil diubah!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Tracking::findOrFail($id)->delete();
        return back()->with('success', 'Data berhasil dihapus!');
    }
}
