<?php

namespace App\Http\Controllers;

use App\Models\BankInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BankController extends Controller
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
        return view('benefits.bank.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'iban'=>'required|max:24',
            'iban_confir'=>'required|same:iban',
            'bank_name'=>'required',
            'bank_account'=>'required'
        ]);
        
        // dd($request->all());
        $user = Auth::user();
        $user->BankInformation()->create($request->all()); 
        return redirect()->route('form');
    }

   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BankInformation  $bankInformation
     * @return \Illuminate\Http\Response
     */
    public function show(BankInformation $bankInformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BankInformation  $bankInformation
     * @return \Illuminate\Http\Response
     */
    public function edit(BankInformation $bankInformation, $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BankInformation  $bankInformation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BankInformation $bankInformation, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BankInformation  $bankInformation
     * @return \Illuminate\Http\Response
     */
    public function destroy(BankInformation $bankInformation)
    {
        //
    }
}
