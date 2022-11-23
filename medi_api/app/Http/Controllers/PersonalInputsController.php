<?php

namespace App\Http\Controllers;

use App\Models\PersonalInputs;
use Illuminate\Http\Request;

class PersonalInputsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PersonalInputs::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $r)
    {
        $one = new PersonalInputs(['title' => $r->title, 'width' => $r->width , 'type' => $r->type]);
        $one->save();
        return 'added' . $r->title;
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
     * @param  \App\Models\PersonalInputs  $personalInputs
     * @return \Illuminate\Http\Response
     */
    public function show(PersonalInputs $personalInputs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PersonalInputs  $personalInputs
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonalInputs $personalInputs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PersonalInputs  $personalInputs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersonalInputs $personalInputs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonalInputs  $personalInputs
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonalInputs $personalInputs)
    {
        //
    }
}
