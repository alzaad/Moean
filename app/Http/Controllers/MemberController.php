<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('benefits.committee.login');
    }

    public function search(Request $request){

        $search = $request->input('search');
        $users = User::query()
        ->where('name', 'LIKE', "%{$search}%")
        ->get();
        return view('benefits.committee.dashboard', compact('users'));
    }


    public function check(Request $request)
    {
        if (Members::where('committees_number', '=', $request->get('committees_number'))->exists()) {
            $members = Members::where("committees_number", "=", $request->get('committees_number'))->first();
            $member_name = $members->committees_name;
            $member_type = $members->member_type;
            $request->session()->put('member_name', $member_name);
            $request->session()->put('member_type', $member_type);
            // dd($members);
            $users = User::all();
            return view('benefits.committee.dashboard', compact('members', 'users'));
        }else{
            return Redirect::back()->with('alert', ' عضو اللجنة غير صحيح');
        }   
    }

    public function dashboard(){
        $users = User::all();
        return view('benefits.committee.dashboard', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\members  $members
     * @return \Illuminate\Http\Response
     */
    public function show(members $members, Request $request, $id)
    {   
        $user = User::all();
        // dd($users);
        $users = DB::table('users')->where('id',$id)->first();
        $personal_infos = DB::table('beneficiary_infos')->where('user_id',$id)->first();
        $contact_infos = DB::table('contact_infos')->where('user_id',$id)->first();
        $job_infos = DB::table('job_infos')->where('user_id',$id)->first();
        $information = DB::table('information')->where('user_id',$id)->first();
        $bank_information = DB::table('bank_information')->where('user_id',$id)->first();
        $commitments = DB::table('commitments')->where('user_id',$id)->first();
        $location_infos = DB::table('location_infos')->where('user_id',$id)->first();
        $openfiles_infos = DB::table('openfiles')->where('user_id',$id)->first();
        $initial_studies = DB::table('initial_studies')->where('user_id',$id)->first();
        $attachments_infos = DB::table('attachments')->where('user_id',$id)->first();
        // dd($attachments_infos);
        if($users->user_type ==='saudi'){
            if($initial_studies->result == 'غير مؤهل'){
                return view('benefits.committee.InitialStudies_show', compact('initial_studies'));
            }
            else if ($personal_infos === null || $contact_infos === null || $job_infos === null || $information === null
            || $bank_information === null || $commitments === null || $location_infos === null || $openfiles_infos === null
            || $attachments_infos === null) {
                return view('benefits.committee.error');
            }else{
                return view('benefits.committee.show', compact('id', 'user', 'contact_infos',
                'personal_infos', 'job_infos', 'information', 'bank_information', 'commitments',
                'location_infos', 'openfiles_infos', 'attachments_infos', 'initial_studies'));
            }
        }
        //Non Saudi
        if($users->user_type === 'non_saudi'){
            $attaches_infos = DB::table('attaches')->where('user_id',$id)->first();
            $non_saudis_infos = DB::table('non_saudis')->where('user_id',$id)->first();
            if ($attaches_infos === null || $non_saudis_infos === null){
                return view('benefits.committee.error');

            }else if($non_saudis_infos->result == 'غير مؤهل'){
                return view('benefits.non_saudi.show', compact('non_saudis_infos'));
            }else{
                return view('benefits.non_saudi.show_2', compact('attaches_infos', 'non_saudis_infos'));
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\members  $members
     * @return \Illuminate\Http\Response
     */
    public function edit(members $members)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\members  $members
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, members $members)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\members  $members
     * @return \Illuminate\Http\Response
     */
    public function destroy(members $members)
    {
        //
    }
}
