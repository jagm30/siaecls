<?php

namespace App\Http\Controllers;

use App\Models\Boletin;
use Illuminate\Http\Request;
use SheetDB\SheetDB;

class BoletinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sheetdb = new SheetDB('5ognlxtnb8jy0');
        dd($sheetdb->get());
        //return $sheetdb;
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
     * @param  \App\Models\Boletin  $boletin
     * @return \Illuminate\Http\Response
     */
    public function show(Boletin $boletin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Boletin  $boletin
     * @return \Illuminate\Http\Response
     */
    public function edit(Boletin $boletin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Boletin  $boletin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Boletin $boletin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Boletin  $boletin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boletin $boletin)
    {
        //
    }
}
