<?php

namespace App\Http\Controllers;

use App\Models\contact_info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ContactInfoController extends Controller
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
        return view('benefits.contact.create');

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
            'mobile_number' => 'required',
        ]);

        $user = Auth::user();
        $user->contact()->create($request->all());
        return redirect()->route('jobInfo.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contact_info  $contact_info
     * @return \Illuminate\Http\Response
     */
    public function show(contact_info $contact_info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contact_info  $contact_info
     * @return \Illuminate\Http\Response
     */
    public function edit(contact_info $contact_info, $id)
    {
        // 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contact_info  $contact_info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contact_info $contact_info, $id)
    {
        // 
    }
          
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contact_info  $contact_info
     * @return \Illuminate\Http\Response
     */
    public function destroy(contact_info $contact_info)
    {
        //
    }
}
