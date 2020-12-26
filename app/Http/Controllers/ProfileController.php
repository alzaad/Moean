<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\contact_info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = Auth::user();
        $user = $users->id;
        $opinion_faten = DB::table('member_opinions')->where('member_name','فاتن النصيان')->where('committees_opinion','مؤهل')->count();
        $opinions = DB::table('member_opinions')->where('user_id',$user)->where('committees_opinion','مؤهل')->count();

        if($opinion_faten == 0 && $opinions == 0){
            $message = 'الطلب قيد الدراسة';
            $request->session()->put('message', $message);

            return view('benefits.profile.error', compact('message'));
        }else if($opinion_faten && $opinions >= 2){
            $message='المستفيد مؤهل';
            $request->session()->put('message', $message);
            return view('benefits.profile.success', compact('message'));
        }else{
            $message='المستفيد غير مؤهل';
            $request->session()->put('message', $message);

            return view('benefits.profile.error', compact('message'));
        }
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
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user= Auth::user();
        $contact_infos = DB::table('contact_infos')->where('user_id',$id)->first();
        $contact_info = json_decode( json_encode($contact_infos), true);
        //
        $bankInformations = DB::table('bank_information')->where('user_id',$id)->first();
        $bankInformation = json_decode( json_encode($bankInformations), true);
        //
        $commitments = DB::table('commitments')->where('user_id',$id)->first();
        $commitment = json_decode( json_encode($commitments), true);
        //
        $job_infos = DB::table('job_infos')->where('user_id',$id)->first();
        $job_info = json_decode( json_encode($job_infos), true);
        //
        $personal_infos = DB::table('beneficiary_infos')->where('user_id',$id)->first();
        $personal_info = json_decode( json_encode($personal_infos), true);
        //
        $informations = DB::table('information')->where('user_id',$id)->first();
        $information = json_decode( json_encode($informations), true);
        //
        $home_infos = DB::table('location_infos')->where('user_id',$id)->first();
        $home_info = json_decode( json_encode($home_infos), true);

        if ($personal_info === null || $contact_info === null || $job_info === null || $information === null
        || $bankInformation === null || $commitment === null || $home_info === null || $openfiles_infos === null
        || $attachments_infos === null) {

            return view('benefits.committee.error');
        }

        return view('benefits.profile.edit', compact('id', 'contact_infos', 'bankInformation',
        'commitment', 'job_info', 'personal_info', 'information', 'home_info'
        ));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        
        $category_array = json_encode($request->input('category'), JSON_UNESCAPED_UNICODE);
        $input['category'] = $category_array;

        $home_array = json_encode($request->input('home_category'), JSON_UNESCAPED_UNICODE);
        $input['home_category'] = $home_array;

        $electric_array = json_encode($request->input('electric'), JSON_UNESCAPED_UNICODE);
        $input['electric'] = $electric_array;

        $this->validate($request,[
            'iban'=>'required|max:8',
            'iban_confir'=>'required|same:iban',
            'electricity_bill' => 'required',
            'water_bill' => 'required',
            'first_name' => 'required',
            'second_name' => 'required',
            'third_name' => 'required',
            'family_name' => 'required',
            'national_id' => 'integer|digits:10',
        ]);
        $contact_info = DB::table('contact_infos')->where('user_id',$id)->update(
            ['email' => $request->input('email'),
            'mobile_number' => $request->input('mobile_number'),
            'phone_number' => $request->input('phone_number'),
            'whatsapp_number' => $request->input('whatsapp_number'),
            'other_number' => $request->input('other_number'),
            'relative' => $request->input('relative'),
        ]);

        $contact_info = DB::table('bank_information')->where('user_id',$id)->update(
            ['bank_name' => $request->input('bank_name'),
            'bank_account' => $request->input('bank_account'),
            'iban' => $request->input('iban'),           
            ]);

        $commitments = DB::table('commitments')->where('user_id',$id)->update(
                ['rent_home' => $request->input('rent_home'),
                'electricity_bill' => $request->input('electricity_bill'),
                'water_bill' => $request->input('water_bill'),
                'monthly_fees' => $request->input('monthly_fees'),
                'monthly_fees_bank' => $request->input('monthly_fees_bank'),
                'debts' => $request->input('debts'),
                'monthly_fees_eco_bank' => $request->input('monthly_fees_eco_bank'),
                'personal_debts' => $request->input('personal_debts'),
                'hospital' => $request->input('hospital'),
                'maintenance' => $request->input('maintenance'),
                'gas' => $request->input('gas'),
                'transfer' => $request->input('transfer'),
                'supplies' => $request->input('supplies'),
                'debts_info' => $request->input('debts_info'),
            ]);

            $job_info = DB::table('job_infos')->where('user_id',$id)->update(
                ['job' => $request->input('job'),
                'job_place' => $request->input('job_place'),
                'phone_number' => $request->input('phone_number'),
                'education' => $request->input('education'),
                'phone_number' => $request->input('phone_number'),
                'salary' => $request->input('salary'),
                'salary_month' => $request->input('salary_month'),
            ]);

            $beneficiary_info = DB::table('beneficiary_infos')->where('user_id',$id)->update(
                ['first_name' => $request->input('first_name'),
                'second_name' => $request->input('second_name'),
                'third_name' => $request->input('third_name'),
                'family_name' => $request->input('family_name'),
                'gender' => $request->input('gender'),
                'national_id' => $request->input('national_id'),
                'place_national' => $request->input('place_national'),
                'place_birth' => $request->input('place_birth'),
                'date_birth' => $request->input('date_birth'),
                'date_national' => $request->input('date_national'),
                'date_ex_national' => $request->input('date_ex_national'),
                'passport_number' => $request->input('passport_number'),
                'passport_place' => $request->input('passport_place'),
                'passport_date' => $request->input('passport_date'),
                'license_number' => $request->input('license_number'),
                'license_place' => $request->input('license_place'),
                'date_ex_license' => $request->input('date_ex_license'),
                'job' => $request->input('job'),
                ]);

            $informations = DB::table('information')->where('user_id',$id)->update(
                    ['disease' => $request->input('disease'),
                    'children_informations' => json_encode($request['children_informations'], JSON_UNESCAPED_UNICODE),
                    'disease_informations' => json_encode($request['disease_informations'], JSON_UNESCAPED_UNICODE),
                    'social_status' => $request->input('social_status'),
                    'family_number' => $request->input('family_number'),
                    'wife_number' => $request->input('wife_number'),
                    'male_number' => $request->input('male_number'),
                    'female_number' => $request->input('female_number'),
                    'who_spend' => $request->input('who_spend'),
                    'other_person' => $request->input('other_person'),
                    'other_person_num' => $request->input('other_person_num'),
                    'other_person_reason' => $request->input('other_person_reason'),
                    'primary_school' => $request->input('primary_school'),
                    'middle_school' => $request->input('middle_school'),
                    'high_school' => $request->input('high_school'),
                    'university' => $request->input('university'),
                    'graduated' => $request->input('graduated'),
                    ]);

            $home_info = DB::table('location_infos')->where('user_id',$id)->update(
                        ['place' => $request->input('place'),
                        'description' => $request->input('description'),
                        'building_num' => $request->input('building_num'),
                        'building_type' => $request->input('building_type'),
                        'building_ownership' => $request->input('building_ownership'),
                        'building_rent' => $request->input('building_rent'),
                        'location_N' => $request->input('location_N'),
                        'location_E' => $request->input('location_E'),
                        'rent_evaluate' => $request->input('rent_evaluate'),
                        'room_number_all' => $request->input('room_number_all'),
                        'room_number' => $request->input('room_number'),
                        'home_status' => $request->input('home_status'),
                        'home_quality' => $request->input('home_quality'),
                        'bedroom_evaluate' => $request->input('bedroom_evaluate'),
                        'kitchen_evaluate' => $request->input('kitchen_evaluate'),
                        'bathroom_evaluate' => $request->input('bathroom_evaluate'),
                        'store_evaluate' => $request->input('store_evaluate'),
                        'driverroom_evaluate' => $request->input('driverroom_evaluate'),
                        'hall_evaluate' => $request->input('hall_evaluate'),
                        'dining_room_evaluate' => $request->input('dining_room_evaluate'),
                        'living_room_evaluate' => $request->input('living_room_evaluate'),
                        'roof_evaluate' => $request->input('roof_evaluate'),
                        'annex_evaluate' => $request->input('annex_evaluate'),
                        'outdoor_evaluate' => $request->input('outdoor_evaluate'),
                        'evaluate_furniture' => $request->input('evaluate_furniture'),
                        'furnished' => $request->input('furnished'),
                        'washing_machine' => $request->input('washing_machine'),
                        'conditioner_1' => $request->input('conditioner_1'),
                        'conditioner_2' => $request->input('conditioner_2'),
                        'conditioner_3' => $request->input('conditioner_3'),
                        'refrigerator' => $request->input('refrigerator'),
                        'fraser' => $request->input('fraser'),
                        'cleaner' => $request->input('cleaner'),
                        'heater' => $request->input('heater'),
                        'fan' => $request->input('fan'),
                        'fireplace' => $request->input('fireplace'),
                        'water_cooler' => $request->input('water_cooler'),
                        'category' => $input['category'],
                        'home_category' => $input['home_category'],
                        'washing_machineـevaluate' => $request->input('washing_machineـevaluate'),
                        'conditioner_1_evaluate' => $request->input('conditioner_1_evaluate'),
                        'conditioner_2_evaluate' => $request->input('conditioner_2_evaluate'),
                        'conditioner_3_evaluate' => $request->input('conditioner_3_evaluate'),
                        'refrigerator_evaluate' => $request->input('refrigerator_evaluate'),
                        'fraser_evaluate' => $request->input('fraser_evaluate'),
                        'cleaner_evaluate' => $request->input('cleaner_evaluate'),
                        'heater_evaluate' => $request->input('heater_evaluate'),
                        'fan_evaluate' => $request->input('fan_evaluate'),
                        'fireplace_evaluate' => $request->input('fireplace_evaluate'),
                        'water_cooler_evaluate' => $request->input('water_cooler_evaluate'),
                        'status_reason' => $request->input('status_reason'),
                        'electric' => $input['electric'],
                        ]);
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
