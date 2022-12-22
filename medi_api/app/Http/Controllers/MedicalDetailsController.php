<?php

namespace App\Http\Controllers;

use App\Models\MedicalDetails;
use Illuminate\Http\Request;

class MedicalDetailsController extends Controller
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
    public function create(Request $r)
    {
        // foreach ($r->toArray() as $a => $val){ 
            // array_push( $li ,'hello');
        //     error_log($a);
        // }
        MedicalDetails::Create($r->toArray())->save();
        return $r;
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
     * @param  \App\Models\MedicalDetails  $medicalDetails
     * @return \Illuminate\Http\Response
     */
    public function show(MedicalDetails $medicalDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MedicalDetails  $medicalDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(MedicalDetails $medicalDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MedicalDetails  $medicalDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MedicalDetails $medicalDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MedicalDetails  $medicalDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicalDetails $medicalDetails)
    {
        //
    }
}
