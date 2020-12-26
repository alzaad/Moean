<?php

namespace App\Http\Controllers;

use App\Models\job_info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class JobInfoController extends Controller
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
        return view('benefits.job.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        dd($request->all());
        $user = Auth::user();
        $user->job_info()->create($request->all());
        return redirect()->route('information.create');

        // return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\job_info  $job_info
     * @return \Illuminate\Http\Response
     */
    public function show(job_info $job_info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\job_info  $job_info
     * @return \Illuminate\Http\Response
     */
    public function edit(job_info $job_info, $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\job_info  $job_info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, job_info $job_info, $id)
    {
        // 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\job_info  $job_info
     * @return \Illuminate\Http\Response
     */
    public function destroy(job_info $job_info)
    {
        //
    }
}
