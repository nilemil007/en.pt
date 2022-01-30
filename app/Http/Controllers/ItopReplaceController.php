<?php

namespace App\Http\Controllers;

use App\Models\ItopReplace;
use Illuminate\Http\Request;
use Toastr;

class ItopReplaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all data from itop-replases table
        $getData = ItopReplace::all();

        return view('itop-replace.index', compact('getData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('itop-replace.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Data Validatoin
        $request->validate([
            'rso_name' => 'filled|alpha|min:3|max:50',
            'rso_itop' => 'filled|min:10|max:11',
            'rep_itop' => 'filled|min:10|max:11',
            'ev_swap' => 'filled|min:18|max:18',
            'rep_reason' => 'filled|min:5',
        ]);

        // Data Insert
        $replaceData = new ItopReplace;
        $replaceData->rso_name = $request->rso_name;
        $replaceData->rso_itop = $request->rso_itop;
        $replaceData->rep_itop = $request->rep_itop;
        $replaceData->ev_swap = $request->ev_swap;
        $replaceData->balance = $request->balance;
        $replaceData->rep_reason = $request->rep_reason;
        $replaceData->save();

        // Toastr alert message
        Toastr::success('Itop replace added successfully.', 'Success', ["positionClass" => "toast-bottom-left", "closeButton" => true, "progressBar" => true]);

        // Redirect to index page
        return redirect('itop-replace');
    }	

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ItopReplace  $itopReplace
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $viewData = ItopReplace::find($id);
        return view('itop-replace.show', compact('viewData'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ItopReplace  $itopReplace
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editData = ItopReplace::find($id);
        return view('itop-replace.edit', compact('editData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ItopReplace  $itopReplace
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $replaceData = ItopReplace::find($id);

        // Data Validatoin
        $request->validate([
            'rso_name' => 'filled|alpha|min:3|max:50',
            'rso_itop' => 'filled|min:10|max:11',
            'rep_itop' => 'filled|min:10|max:11',
            'ev_swap' => 'filled|min:18|max:18',
            'rep_reason' => 'filled|min:5',
        ]);

        // Data Update
        $replaceData->rso_name = $request->rso_name;
        $replaceData->rso_itop = $request->rso_itop;
        $replaceData->rep_itop = $request->rep_itop;
        $replaceData->ev_swap = $request->ev_swap;
        $replaceData->balance = $request->balance;
        $replaceData->status = $request->status;
        $replaceData->rep_reason = $request->rep_reason;
        $replaceData->update();

        // Toastr alert message
        Toastr::success('Itop replace update successfully.', 'Success', ["positionClass" => "toast-bottom-left", "closeButton" => true, "progressBar" => true]);

        // Redirect to index page
        return redirect('itop-replace');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ItopReplace  $itopReplace
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $repDelete = ItopReplace::find($id);
        // $repDelete->delete();
        ItopReplace::destroy($id);

        // Toastr alert message
        Toastr::success('Data deleted successfully.', 'Success', ["positionClass" => "toast-bottom-left", "closeButton" => true, "progressBar" => true]);

        // Redirect to index page
        return redirect('itop-replace');
    }
}
