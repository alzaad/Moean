<?php

namespace App\Http\Controllers;

use App\Models\InitialStudy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InitialStudyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('benefits.first.initial_study');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('benefits.first.initial_study');
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
    
    public function check_initialstudy(Request $request)
    {
        $initialstudy = new InitialStudy();

        // dd($request->all());
        $user = Auth::user();
        $this->validate($request, [
            'family' => 'required',
            'home' => 'required'
        ]);

        $family = $request['family'];
        $salary = $request['salary'];
        $social_security = $request['social_security'];
        $retirement = $request['retirement'];
        $home = $request['home'];
        $other = $request['other'];
        $result = '';
        $total = $salary + $social_security  + $retirement + $other;

        // 16
        if($family >= 16 && $home == 'نعم'){
            $total_rent = 8750 + 1000;
            $total_ = $total + 1000; 
            if($total_ > $total_rent ){
                $result = 'غير مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.error_2');
            }else{
                $result = 'مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.success');
            }
        }elseif($family == 16 && $home == 'لا'){
            if($total > 8750 ){
                $result = ' غير مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.error_2');
            }else{
                $result = 'مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.success');
            }
        }
        // 15
        if($family == 15 && $home == 'نعم'){
            $total_rent = 8250 + 1000;
            $total_ = $total + 1000; 
            if($total_ > $total_rent ){
                $result = ' غير مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.error_2');
            }else{
                $result = 'مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.success');
            }
        }elseif($family == 15 && $home == 'لا'){
            if($total > 8250 ){
                $result = ' غير مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.error_2');
            }else{
                $result = 'مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.success');
            }
        }
         // 14
        if($family == 14 && $home == 'نعم'){
            $total_rent = 7750 + 1000;
            $total_ = $total + 1000; 
            if($total_ > $total_rent){
                $result = ' غير مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.error_2');
            }else{
                $result = 'مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.success');
            }
        }elseif($family == 14 && $home == 'لا'){
            if($total > 7750 ){
                $result = ' غير مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.error_2');
            }else{
                $result = 'مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.success');
            }
        }
         // 13
        if($family == 13 && $home == 'نعم'){
            $total_rent = 7250 + 1000;
            $total_ = $total + 1000; 
            if($total_ > $total_rent ){
                $result = ' غير مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.error_2');
            }else{
                $result = 'مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.success');
            }
        }elseif($family == 13 && $home == 'لا'){
            if($total > 7250 ){
                $result = ' غير مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.error_2');
            }else{
                $result = 'مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.success');
            }
        }
         // 12
        if($family == 12 && $home == 'نعم'){
            $total_rent = 6750 + 1000;
            $total_ = $total + 1000; 
            if($total_ > $total_rent ){
                $result = ' غير مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.error_2');
            }else{
                $result = 'مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.success');
            }
        }elseif($family == 12 && $home == 'لا'){
            if($total > 6750 ){
                $result = ' غير مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.error_2');
            }else{
                $result = 'مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.success');
            }
        }
         // 11
         if($family == 11 && $home == 'نعم'){
            $total_rent = 6250 + 1000;
            $total_ = $total + 1000; 
            if($total_ > $total_rent ){
                $result = ' غير مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.error_2');
            }else{
                $result = 'مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.success');
            }
        }elseif($family == 11 && $home == 'لا'){
            if($total > 6250 ){
                $result = ' غير مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.error_2');
            }else{
                $result = 'مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.success');
            }
        } 
        // 10
        if($family == 10 && $home == 'نعم'){
            $total_rent = 5750 + 1000;
            $total_ = $total + 1000; 
            if($total_ > $total_rent ){
                $result = ' غير مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.error_2');
            }else{
                $result = 'مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.success');
            }
        }elseif($family == 10 && $home == 'لا'){
            if($total > 5750 ){
                $result = ' غير مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.error_2');
            }else{
                $result = 'مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.success');
            }
        }
        // 9
        if($family == 9 && $home == 'نعم'){
            $total_rent = 5250 + 1000;
            $total_ = $total + 1000; 
            if($total_ > $total_rent){
                $result = ' غير مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.error_2');
            }else{
                $result = 'مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.success');
            }
        }elseif($family == 9 && $home == 'لا'){
            if($total > 5250 ){
                $result = ' غير مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.error_2');
            }else{
                $result = 'مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.success');
            }
        }
        // 8
        if($family == 8 && $home == 'نعم'){
            $total_rent = 4750 + 1000;
            $total_ = $total + 1000; 
            if($total_ > $total_rent){
                $result = ' غير مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.error_2');
            }else{
                $result = 'مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.success');
            }
        }elseif($family == 8 && $home == 'لا'){
            if($total > 4750 ){
                $result = ' غير مؤهل';
                $user->initialstudy()->create($request->all());
                return view('benefits.first.error_2');
            }else{
                $result = 'مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.success');
            }
        }
        // 7
        if($family == 7 && $home == 'نعم'){
            $total_rent = 4250 + 1000;
            $total_ = $total + 1000; 
            if($total_ > $total_rent){
                $result = ' غير مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.error_2');
            }else{
                $result = 'مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.success');
            }
        }elseif($family == 7 && $home == 'لا'){
            if($total > 4250 ){
                $result = ' غير مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.error_2');
            }else{
                $result = 'مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.success');
            }
        }
        // 6
        if($family == 6 && $home == 'نعم'){
            $total_rent = 3750 + 1000;
            $total_ = $total + 1000; 
            if($total_ > $total_rent){
                $result = ' غير مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.error_2');
            }else{
                $result = 'مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.success');
            }
        }elseif($family == 6 && $home == 'لا'){
            if($total > 3750 ){
                $result = ' غير مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.error_2');
            }else{
                $result = 'مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.success');
            }
        }
        // 5
        if($family == 5 && $home == 'نعم'){
            $total_rent = 3250 + 1000;
            $total_ = $total + 1000; 
            if($total_ > $total_rent){
                $result = ' غير مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.error_2');
            }else{
                $result = 'مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.success');
            }
        }elseif($family == 5 && $home == 'لا'){
            if($total  > 3250 ){
                $result = ' غير مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.error_2');
            }else{
                $result = 'مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.success');
            }
        }
        // 4
        if($family == 4 && $home == 'نعم'){
            $total_rent = 2750 + 1000;
            $total_ = $total + 1000; 
            if($total_ > $total_rent){
                $result = ' غير مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.error_2');
            }else{
                $result = 'مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.success');
            }
        }elseif($family == 4 && $home == 'لا'){
            if($total > 2750 ){
                $result = ' غير مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.error_2');
            }else{
                $result = 'مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.success');
            }
        }
        // 3
        if($family == 3 && $home == 'نعم'){
            $total_rent = 2250 + 1000;
            $total_ = $total + 1000; 
            if($total_ > $total_rent){
                $result = ' غير مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.error_2');
            }else{
                $result = 'مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.success');
            }
        }elseif($family == 3 && $home == 'لا'){
            if($total > 2250 ){
                $result = ' غير مؤهل';
                return view('benefits.first.error_2');
            }else{
                $result = 'مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.success');
            }
        }
        // 2
        if($family == 2 && $home == 'نعم'){
            $total_rent = 1750 + 1000;
            $total_ = $total + 1000; 
            if($total_ > $total_rent){
                $result = ' غير مؤهل';
                return view('benefits.first.error_2');
            }else{
                $result = 'مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.success');
            }
        }elseif($family == 2 && $home == 'لا'){
            if($total  > 1750 ){
                $result = ' غير مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.error_2');
            }else{
                $result = 'مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.success');
            }
        }
        
         // 1
        if($family == 1 && $home == 'نعم'){
            $total_rent = 1000 + 1000;
            $total_ = $total + 1000; 
            if($total_ > $total_rent){
                $result = ' غير مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.error_2');
            }else{
                $result = 'مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.success');
            }
        }elseif($family == 1 && $home == 'لا'){
            if($total  > 1000 ){
                $result = ' غير مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.error_2');
            }else{
                $result = 'مؤهل';
                $initialstudy->user_id = Auth::user()->id;
                $initialstudy->family = $request['family'];
                $initialstudy->salary = $request['salary'];
                $initialstudy->social_security = $request['social_security'];
                $initialstudy->retirement = $request['retirement'];
                $initialstudy->other = $request['other'];
                $initialstudy->home = $request['home'];
                $initialstudy->result = $result;
                $initialstudy->save();
                return view('benefits.first.success');
            }
        }
    }
    
    public function checkLocation(){
        return view('benefits.first.location');
    }

    public function check_Location(Request $request){

        $location = $request['check_location'];
        // dd($location);
        if($location == 'آخرى'){
            return view('benefits.first.error');
        }else{
            if(auth()->user()->user_type =="non_saudi"){
                return redirect()->route('nonsaudi');
            }else{
                return redirect()->route('index');
            }
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InitialStudy  $initialStudy
     * @return \Illuminate\Http\Response
     */
    public function show(InitialStudy $initialStudy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InitialStudy  $initialStudy
     * @return \Illuminate\Http\Response
     */
    public function edit(InitialStudy $initialStudy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InitialStudy  $initialStudy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InitialStudy $initialStudy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InitialStudy  $initialStudy
     * @return \Illuminate\Http\Response
     */
    public function destroy(InitialStudy $initialStudy)
    {
        //
    }
}
