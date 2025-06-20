<?php

namespace App\Http\Controllers;
use App\Models\Boletin;
use Illuminate\Http\Request;
use SheetDB\SheetDB;
use Barryvdh\DomPDF\Facade\Pdf;

class BoletinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $sheetdb = new SheetDB('3lmc9v4ac2s70');
        
        //return $sheetdb->get();
        $arraycal = $sheetdb->get();
        
        //$arraycal = [{"nombre":"jose","cal1":"7","cal2":"10","cal3":"5"},{"nombre":"antonio","cal1":"8","cal2":"9","cal3":"6"},{"nombre":"carlos","cal1":"10","cal2":"10","cal3":"10"}];
        //$arraycal = ["nombre" => "jose", "cal1" => "10","cal2" => "8"];
       // return $arraycal;
        //return view('boletin.index', ['rows' => $arraycal]);
        $data = [

            'title' => 'Welcome to ItSolutionStuff.com',

            'date' => date('m/d/Y'),

            'rows' => $arraycal

        ]; 

        $pdf = PDF::loadView('boletin.index', $data);
        $pdf = $pdf->setPaper('letter'); // Utiliza el tamaño carta predeterminado
        return $pdf->stream('itsolutionstuff.pdf');
        //return $pdf->download(); 
    }
        public function segundoB(){
        $sheetdb = new SheetDB('ozcokb0se8t0l');
        $arraycal = $sheetdb->get();

         $data = [

            'title' => 'Welcome to ItSolutionStuff.com',

            'date' => date('m/d/Y'),

            'rows' => $arraycal

        ]; 

        $pdf = PDF::loadView('boletin.segundoB', $data);
        $pdf = $pdf->setPaper('letter'); // Utiliza el tamaño carta predeterminado
        return $pdf->stream('itsolutionstuff.pdf');
        //return $pdf->download(); 
    }

    public function boletin4a(){
    
        // Reemplaza 'xlfugl8u5w4js' con tu clave de SheetDB
        
        $sheetdb = new SheetDB('xlfugl8u5w4js');    
        $arraycal = $sheetdb->get();

         $data = [

            'title' => 'Welcome to ItSolutionStuff.com',

            'date' => date('m/d/Y'),

            'rows' => $arraycal

        ]; 

        $pdf = PDF::loadView('boletin.boletin4a', $data);
        $pdf = $pdf->setPaper('letter'); // Utiliza el tamaño carta predeterminado
        return $pdf->stream('itsolutionstuff.pdf');
        //return $pdf->download(); 
    }

     public function cuartoB(){
        $sheetdb = new SheetDB('r6s8zjc5l54r0');
        $arraycal = $sheetdb->get();

         $data = [

            'title' => 'Welcome to ItSolutionStuff.com',

            'date' => date('m/d/Y'),

            'rows' => $arraycal

        ]; 

        $pdf = PDF::loadView('boletin.cuartoB', $data);
        $pdf = $pdf->setPaper('letter'); // Utiliza el tamaño carta predeterminado
        return $pdf->stream('itsolutionstuff.pdf');
        //return $pdf->download(); 
    }
    public function sextoQB(){
        $sheetdb = new SheetDB('r6s8zjc5l54r0');
        $arraycal = $sheetdb->get();

         $data = [

            'title' => 'Welcome to ItSolutionStuff.com',

            'date' => date('m/d/Y'),

            'rows' => $arraycal

        ]; 

        $pdf = PDF::loadView('boletin.sextoQB', $data);
        $pdf = $pdf->setPaper('letter'); // Utiliza el tamaño carta predeterminado
        return $pdf->stream('itsolutionstuff.pdf');
        //return $pdf->download(); 
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
