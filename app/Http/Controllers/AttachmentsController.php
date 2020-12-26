<?php

namespace App\Http\Controllers;

use App\Models\attachments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AttachmentsController extends Controller
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
        return view('benefits.attachments.create');

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
        $attachments= new attachments();
        $attachments->filename=json_encode($data);
        $attachments->user_id = Auth::user()->id;
        $attachments->take_image = $request['take_image'];
        // dd($attachments);
        $attachments->save();
        return redirect()->route('openfile');

        // return back()->with('success', 'تم رفع الملفات بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\attachments  $attachments
     * @return \Illuminate\Http\Response
     */
    public function show(attachments $attachments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\attachments  $attachments
     * @return \Illuminate\Http\Response
     */
    public function edit(attachments $attachments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\attachments  $attachments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, attachments $attachments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\attachments  $attachments
     * @return \Illuminate\Http\Response
     */
    public function destroy(attachments $attachments)
    {
        //
    }
}
