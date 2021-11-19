<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWomenRequest;
use App\Http\Requests\UpdateWomenRequest;
use App\Models\Women;

class WomenController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWomenRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWomenRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Women  $women
     * @return \Illuminate\Http\Response
     */
    public function show(Women $women)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Women  $women
     * @return \Illuminate\Http\Response
     */
    public function edit(Women $women)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWomenRequest  $request
     * @param  \App\Models\Women  $women
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWomenRequest $request, Women $women)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Women  $women
     * @return \Illuminate\Http\Response
     */
    public function destroy(Women $women)
    {
        //
    }
}
