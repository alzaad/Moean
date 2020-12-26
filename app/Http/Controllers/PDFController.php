<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function preview()
    {
        $user = Auth::user();

        return view('benefits.committee.show', compact('user'));
    }
    public function printPDF(){

        $user = Auth::user();

        $pdf = PDF::loadView('benefits.committee.show');  
        return $pdf->download('medium.pdf');

    }
}
