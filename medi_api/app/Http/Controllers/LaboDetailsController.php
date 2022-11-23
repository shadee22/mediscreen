<?php

namespace App\Http\Controllers;

use App\Models\LaboDetails;
use Illuminate\Http\Request;

class LaboDetailsController extends Controller
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
        //
        LaboDetails::create($r->toArray())->save();
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
     * @param  \App\Models\LaboDetails  $laboDetails
     * @return \Illuminate\Http\Response
     */
    public function show(LaboDetails $laboDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LaboDetails  $laboDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(LaboDetails $laboDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LaboDetails  $laboDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LaboDetails $laboDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LaboDetails  $laboDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(LaboDetails $laboDetails)
    {
        //
    }
}
