<?php

namespace App\Http\Controllers;

use App\Models\commitments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CommitmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('benefits.commitment.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'electricity_bill' => 'required',
            'water_bill' => 'required',
        ]);

        $user = Auth::user();
        $user->commitment()->create($request->all());    
        return redirect()->route('location.create');

    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\commitments  $commitments
     * @return \Illuminate\Http\Response
     */
    public function show(commitments $commitments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\commitments  $commitments
     * @return \Illuminate\Http\Response
     */
    public function edit(commitments $commitments, $id)
    {
        // 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\commitments  $commitments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, commitments $commitments, $id)
    {
        // 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\commitments  $commitments
     * @return \Illuminate\Http\Response
     */
    public function destroy(commitments $commitments)
    {
        //
    }
}
