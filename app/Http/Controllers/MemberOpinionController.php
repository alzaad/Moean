<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\MemberOpinion;
use Illuminate\Http\Request;
use App\Models\Members;

class MemberOpinionController extends Controller
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
        // $user = Auth::user();
        // return view('benefits.committee.show');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $members= new MemberOpinion();
        $members->member_name = session('member_name');
        $members->user_id = $request['user_id'];
        $members->committees_note = $request['committees_note'];
        $members->committees_reason = $request['committees_reason'];
        $members->committees_opinion = $request['committees_opinion'];
        // dd($members);
        $members->save();    
        return back()->with('message','تم حفظ البيانات بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MemberOpinion  $memberOpinion
     * @return \Illuminate\Http\Response
     */
    public function show(MemberOpinion $memberOpinion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MemberOpinion  $memberOpinion
     * @return \Illuminate\Http\Response
     */
    public function edit(MemberOpinion $memberOpinion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MemberOpinion  $memberOpinion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MemberOpinion $memberOpinion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MemberOpinion  $memberOpinion
     * @return \Illuminate\Http\Response
     */
    public function destroy(MemberOpinion $memberOpinion)
    {
        //
    }
}
