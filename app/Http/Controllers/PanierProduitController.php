<?php

namespace App\Http\Controllers;

use App\Models\PanierProduit;
use App\Http\Requests\StorePanierProduitRequest;
use App\Http\Requests\UpdatePanierProduitRequest;

class PanierProduitController extends Controller
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
     * @param  \App\Http\Requests\StorePanierProduitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePanierProduitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PanierProduit  $panierProduit
     * @return \Illuminate\Http\Response
     */
    public function show(PanierProduit $panierProduit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PanierProduit  $panierProduit
     * @return \Illuminate\Http\Response
     */
    public function edit(PanierProduit $panierProduit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePanierProduitRequest  $request
     * @param  \App\Models\PanierProduit  $panierProduit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePanierProduitRequest $request, PanierProduit $panierProduit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PanierProduit  $panierProduit
     * @return \Illuminate\Http\Response
     */
    public function destroy(PanierProduit $panierProduit)
    {
        //
    }
}
