<?php

namespace App\Http\Controllers;

use App\Models\LaboDetails;
use App\Models\MedicalDetails;
use App\Models\PersonalDetails;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PersonalDetailsController extends Controller
{

    public function update_data(Request $r){
        
        // try {
            PersonalDetails::find($r['personal']['id'])->update($r['personal']);
            MedicalDetails::find($r['personal']['medi_id'])->update($r['medical']); 
            LaboDetails::find($r['personal']['labo_id'])->update($r['labo']);
        // } catch (Exception $e) {
        //     error_log($e);
        // }
       
        return response('edited succusffly');
    }
    public function me(Request $r)
    {
        return response()->json([
            'data' => $r->user(),
        ]);
    }
    public function edit_selected_patient(Request $r){
    $v = PersonalDetails::with(['medi','labo'])->get()->find($r->data);
        return response()->json($v);
    }
    public function get_all_patients(Request $r)
    {
        return PersonalDetails::all();
    }
    public function login(Request $r)
    {
        if (!Auth::attempt($r->only('email', 'password'))) {
            return response()->json([
                'message' => 'Invalid login details'
            ], 401);
        }
        $r->session()->regenerate();
    }

    public function logout(Request $r)
    {
        Auth::logout();
        $r->session()->invalidate();
        $r->session()->regenerateToken();
    }
    public function save_all_user_details(Request $r)
    {
        $uni = hexdec(uniqid());
        $medical_details = array_merge($r['medical'], array('id' => $uni));
        $labo_details = array_merge($r['labo'], array('id' => $uni));
        $personal_details = array_merge($r['personal'], array('labo_id' => $uni, 'medi_id' => $uni));

        MedicalDetails::Create($medical_details)->save();
        LaboDetails::Create($labo_details)->save();
        PersonalDetails::Create($personal_details)->save();

        ///RESET TABLES

        // DB::table('personal_details')->truncate();
        // DB::table('medical_details')->truncate();
        // DB::table('labo_details')->truncate();

        // $li = [];

        // foreach($value as $key => $val ){
        //     array_push( $li , gettype($val));

        // }

        return response()->json($r);
    }

    protected function delete_selected_patient(Request $r)

    {
        PersonalDetails::find($r->id)->delete();
        return PersonalDetails::all();
    }

    public function testing(Request $r)
    {
        return $r;
        //    $a =  PersonalDetails::find(3)->medi()->get();
        //    return response()->json([
        //        'find' => $a ,
        //    ]);
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
     * @param  \App\Models\PersonalDetails  $personalDetails
     * @return \Illuminate\Http\Response
     */
    public function show(PersonalDetails $personalDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PersonalDetails  $personalDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonalDetails $personalDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PersonalDetails  $personalDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersonalDetails $personalDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonalDetails  $personalDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonalDetails $personalDetails)
    {
        //
    }
}
