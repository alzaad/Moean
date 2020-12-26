<?php

namespace App\Http\Controllers;

use App\Models\location_info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LocationInfoController extends Controller
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
        $user = Auth::user();
        $user_id = $user->id;
        // dd($user_id);
        return view('benefits.home.create', compact('user_id'));

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
        $this->validate($request,[
            'place'=>'required',
            'description'=>'required',
            'building_num'=>'required',
            'location_N'=>'required',
            'location_E'=>'required',
            'building_ownership'=>'required',
            'building_type'=>'required',
        ]);

        $user = Auth::user();
        $user_id = $user->id;
       
        $input = $request->all();
        $input['user_id'] = $user_id;
      
        $category_array = json_encode($request->input('category'), JSON_UNESCAPED_UNICODE);
        $input['category'] = $category_array;

        $home_array = json_encode($request->input('home_category'), JSON_UNESCAPED_UNICODE);
        $input['home_category'] = $home_array;

        $electric_array = json_encode($request->input('electric'), JSON_UNESCAPED_UNICODE);
        $input['electric'] = $electric_array;
       
        $user->location_info()->create($input);
        return redirect()->route('bank.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\location_info  $location_info
     * @return \Illuminate\Http\Response
     */
    public function show(location_info $location_info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\location_info  $location_info
     * @return \Illuminate\Http\Response
     */
    public function edit(location_info $location_info, $id)
    {
        // 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\location_info  $location_info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, location_info $location_info, $id)
    {
        // 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\location_info  $location_info
     * @return \Illuminate\Http\Response
     */
    public function destroy(location_info $location_info)
    {
        //
    }
}
