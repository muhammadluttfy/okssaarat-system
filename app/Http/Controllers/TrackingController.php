<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Employee;
use App\Models\Tracking;
use App\Models\FinancePo;
use App\Models\MarketingPo;
use App\Models\ProductionPo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProgressPo;
use Illuminate\Support\Facades\Auth;

class TrackingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $trackings = Tracking::all();
        $progress_po = ProgressPo::all();

        return view('dashboard', [
            'trackings' => $trackings,
            'statuses' => Status::all(),
            'progress_pos' => $progress_po,
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
        // return $request->all();
        // die();
        // validasi input dari form
        $validatedData = $request->validate([
            'po_number' => 'required',
            'employee_id' => 'required',
            'status_id' => 'required',
            'departement_id' => '',

            'date' => 'required',
            'description' => 'required',
            'image' => 'required|image|file|max:3024',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('tracking-images');
        }

        $validatedData['departement_id'] = Auth::user()->departement_id;
        $validatedData['progress_po_id'] = $request->progress_po_id;

        // if (Auth::user()->departement_id == 1) {
        //     $validatedData['production_po_id'] = $request->progress_po_id;
        // }

        // if (Auth::user()->departement_id == 2) {
        //     $validatedData['finance_po_id'] = $request->progress_po_id;
        // }

        // if (Auth::user()->departement_id == 3) {
        //     $validatedData['marketing_po_id'] = $request->progress_po_id;
        // }

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
        $tracking->progress_po_id = $request->input('progress_po_id');
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
