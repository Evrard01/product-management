<?php

namespace App\Http\Controllers;

use App\Models\Concerne;
use App\Http\Requests\StoreConcerneRequest;
use App\Http\Requests\UpdateConcerneRequest;

class ConcerneController extends Controller
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
     * @param  \App\Http\Requests\StoreConcerneRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConcerneRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Concerne  $concerne
     * @return \Illuminate\Http\Response
     */
    public function show(Concerne $concerne)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Concerne  $concerne
     * @return \Illuminate\Http\Response
     */
    public function edit(Concerne $concerne)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConcerneRequest  $request
     * @param  \App\Models\Concerne  $concerne
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConcerneRequest $request, Concerne $concerne)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Concerne  $concerne
     * @return \Illuminate\Http\Response
     */
    public function destroy(Concerne $concerne)
    {
        //
    }
}
