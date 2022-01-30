<?php

namespace App\Http\Controllers;

use App\Models\Supervisor;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Toastr;

class SupervisorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supervisors = Supervisor::all();
        return view('supervisor.index', compact('supervisors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supervisor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Data Validation
        $request->validate([
            'sup_name'          => 'filled|between:3,50',
            'sup_number'        => 'filled|between:10,11',
            'personal_number'   => 'filled|between:10,11',
            'joining_date'      => 'filled|date',
        ]);

        // Data Insert
        $supervisor = new Supervisor();
        $supervisor->sup_name           = $request->sup_name;
        $supervisor->sup_number         = $request->sup_number;
        $supervisor->personal_number    = $request->personal_number;
        $supervisor->joining_date       = $request->joining_date;
        $supervisor->save();

        // Toastr alert message
        Toastr::success('Supervisor added successfully.', 'Success', ["positionClass" => "toast-bottom-left", "closeButton" => true]);

        // Redirect to index page
        return redirect('supervisor');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supervisor  $supervisor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'Show Method';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supervisor  $supervisor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editSupervisor = Supervisor::find($id);
        return view('supervisor.edit', compact('editSupervisor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supervisor  $supervisor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Data validation
        $request->validate([
            'sup_name'          => 'filled|between:3,50',
            'sup_number'        => 'filled|between:10,11',
            'personal_number'   => 'filled|between:10,11',
            'father_name'       => 'filled|between:3,50',
            'mother_name'       => 'filled|between:3,50',
            'address'           => 'filled|between:3,150',
            'nid'               => 'filled|between:10,17',
            'dob'               => 'filled|date',
            'joining_date'      => 'filled|date',
        ]);

        // Data Update
        $supervisor = Supervisor::find($id);
        $supervisor->sup_name           = $request->sup_name;
        $supervisor->sup_number         = $request->sup_number;
        $supervisor->personal_number    = $request->personal_number;
        $supervisor->father_name        = $request->father_name;
        $supervisor->mother_name        = $request->mother_name;
        $supervisor->address            = $request->address;
        $supervisor->nid                = $request->nid;
        $supervisor->dob                = $request->dob;
        $supervisor->joining_date       = $request->joining_date;
        $supervisor->update();

        // Toastr alert message
        Toastr::success('Supervisor update successfully.', 'Success', ["positionClass" => "toast-bottom-left", "closeButton" => true, "progressBar" => true]);

        // Redirect to index page
        return redirect('supervisor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supervisor  $supervisor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Supervisor::destroy($id);

        // Toastr alert message
        Toastr::success('Supervisor deleted successfully.', 'Success', ["positionClass" => "toast-bottom-left", "closeButton" => true, "progressBar" => true]);

        // Redirect to index page
        return redirect('supervisor');

    }
}
