<?php

namespace App\Http\Controllers;

use App\Models\NonSaudi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NonSaudiController extends Controller
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
        return view('benefits.non_saudi.initial_study');
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
            'name' => 'required',
            'national_id' => 'required',
            'region' => 'required',
            'age' => 'required',
        ]);

        $result = '';
        $nonSaudi = new NonSaudi();
        // dd($request->all());
            if( $request['age'] >= 50){
                if($request['region'] == 'القصيم'){
                    $result = ' مؤهل';
                    $nonSaudi->user_id = Auth::user()->id;
                    $nonSaudi->name = $request['name'];
                    $nonSaudi->age = $request['age'];
                    $nonSaudi->national_id = $request['national_id'];
                    $nonSaudi->region = $request['region'];
                    $nonSaudi->result = $result;
                    // dd($request->all());
                    $nonSaudi->save();
                    
                    return redirect()->route('attach.create');
                }
            }else{
                $result = ' غير مؤهل';
                $nonSaudi->user_id = Auth::user()->id;
                $nonSaudi->name = $request['name'];
                $nonSaudi->age = $request['age'];
                $nonSaudi->national_id = $request['national_id'];
                $nonSaudi->region = $request['region'];
                $nonSaudi->result = $result;
                // dd($request->all());
                $nonSaudi->save();
                return view('benefits.non_saudi.error');
            }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NonSaudi  $nonSaudi
     * @return \Illuminate\Http\Response
     */
    public function show(NonSaudi $nonSaudi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NonSaudi  $nonSaudi
     * @return \Illuminate\Http\Response
     */
    public function edit(NonSaudi $nonSaudi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NonSaudi  $nonSaudi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NonSaudi $nonSaudi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NonSaudi  $nonSaudi
     * @return \Illuminate\Http\Response
     */
    public function destroy(NonSaudi $nonSaudi)
    {
        //
    }
}
