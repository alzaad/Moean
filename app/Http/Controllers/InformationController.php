<?php

namespace App\Http\Controllers;

use App\Models\information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use DateTime;

class InformationController extends Controller
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
        $id = Auth::user()->id;
        $personal_infos = DB::table('beneficiary_infos')->where('user_id',$id)->first();
        return view('benefits.social.create', compact('personal_infos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'social_status' => 'required',
            'family_number' => 'required',
            'who_spend' => 'required',
        ]);

        $user = Auth::user();
        $information = new information();
      
        $information->user_id = Auth::user()->id;
        $information->social_status = $request['social_status'];
        $information->wife_number = $request['wife_number'];
        $information->family_number = $request['family_number'];
        $information->male_number = $request['male_number'];
        $information->female_number = $request['female_number'];
        $information->children_informations = json_encode($request['children_informations'], JSON_UNESCAPED_UNICODE);
        $information->who_spend = $request['who_spend'];
        $information->other_person = $request['other_person'];
        $information->other_person_num = $request['other_person_num'];
        $information->other_person_reason = $request['other_person_reason'];
        $information->primary_school = $request['primary_school'];
        $information->middle_school = $request['middle_school'];
        $information->high_school = $request['high_school'];
        $information->university = $request['university'];
        $information->graduated = $request['graduated'];
        $information->disease = $request['disease'];
        $information->disease_informations = json_encode($request['disease_informations'], JSON_UNESCAPED_UNICODE);
        // dd($information);
        $information->save();
        return redirect()->route('commitment.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\information  $information
     * @return \Illuminate\Http\Response
     */
    public function show(information $information)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\information  $information
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\information  $information
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\information  $information
     * @return \Illuminate\Http\Response
     */
    public function destroy(information $information)
    {
        //
    }
}
