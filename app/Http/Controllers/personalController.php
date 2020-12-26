<?php

namespace App\Http\Controllers;

use App\Models\beneficiary_info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class personalController extends Controller
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
       
        return view('benefits.personal_information.create');
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
            'first_name' => 'required',
            'second_name' => 'required',
            'third_name' => 'required',
            'family_name' => 'required',
            'national_id' => 'integer|digits:10',
        ]);

        if($request->date_ex_national <= $request->date_national){
            Session::flash('error', "يرجى التأكد من تاريخ انتهاء الهوية الوطنية");
            return back();   
        }else{
        }
        $user = Auth::user();
        $user->beneficiary_info()->create($request->all());
        return redirect()->route('contactInfo.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\beneficiary_info  $beneficiary_info
     * @return \Illuminate\Http\Response
     */
    public function show(beneficiary_info $beneficiary_info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\beneficiary_info  $beneficiary_info
     * @return \Illuminate\Http\Response
     */
    public function edit(beneficiary_info $beneficiary_info, $id)
    {
        // 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\beneficiary_info  $beneficiary_info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, beneficiary_info $beneficiary_info, $id)
    {
        // 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\beneficiary_info  $beneficiary_info
     * @return \Illuminate\Http\Response
     */
    public function destroy(beneficiary_info $beneficiary_info)
    {
        //
    }
}
