<?php

namespace App\Http\Controllers;

use App\Models\Attach;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AttachController extends Controller
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
        return view('benefits.non_saudi.attach');
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
            'filename' => 'required',
        ]);
    
        if($request->hasfile('filename'))
        {
            foreach($request->file('filename') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/attach/images', $name);  
                $data[] = $name;
            }
        }
        $attach = new Attach();
        $attach->filename=json_encode($data);
        $attach->user_id = Auth::user()->id;
        $attach->take_image = $request['take_image'];
        // dd($attach);
        $attach->save();
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attach  $attach
     * @return \Illuminate\Http\Response
     */
    public function show(Attach $attach)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attach  $attach
     * @return \Illuminate\Http\Response
     */
    public function edit(Attach $attach)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Attach  $attach
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attach $attach)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attach  $attach
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attach $attach)
    {
        //
    }
}
