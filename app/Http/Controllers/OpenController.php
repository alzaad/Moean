<?php

namespace App\Http\Controllers;

use App\Models\Openfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class OpenController extends Controller
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
        return view('benefits.open-file.create');

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
            'filename' => 'required',
            'checkvalue' => 'required'
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
        
        $openfile= new openfile();
        $openfile->filename=json_encode($data, true);
        $openfile->user_id = Auth::user()->id;
        $openfile->take_image = $request['take_image'];
        $openfile->checkvalue = $request['checkvalue'];
        // dd($openfile);
        $openfile->save();
        // return back()->with('success', 'تم رفع الملفات بنجاح');
        return redirect()->route('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Openfile  $openfile
     * @return \Illuminate\Http\Response
     */
    public function show(Openfile $openfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Openfile  $openfile
     * @return \Illuminate\Http\Response
     */
    public function edit(Openfile $openfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Openfile  $openfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Openfile $openfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Openfile  $openfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Openfile $openfile)
    {
        //
    }
}
