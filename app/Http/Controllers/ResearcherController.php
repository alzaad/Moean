<?php

namespace App\Http\Controllers;

use App\Models\MemberOpinion;
use Illuminate\Http\Request;
use App\Models\Members;
use Illuminate\Support\Facades\DB;


class ResearcherController extends Controller
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
        $memberOpinion= new MemberOpinion();
        $memberOpinion->member_name = session('member_name');
        $memberOpinion->user_id = $request['user_id'];
        $memberOpinion->attach = $request['attach'];
        $memberOpinion->location = $request['location'];
        $memberOpinion->family = $request['family'];
        $memberOpinion->note = $request['note'];
        // dd($memberOpinion);
        $memberOpinion->save();    
        return back()->with('message','تم حفظ البيانات بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Researcher  $researcher
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $researcher_opinions = DB::table('member_opinions')
                ->where('user_id',$id)
                ->get();
        // dd($researcher_opinions);
        return view('benefits.committee.researcher', compact('researcher_opinions')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Researcher  $researcher
     * @return \Illuminate\Http\Response
     */
    public function edit(Researcher $researcher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Researcher  $researcher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Researcher $researcher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Researcher  $researcher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Researcher $researcher)
    {
        //
    }
}
