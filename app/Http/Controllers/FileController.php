<?php

namespace App\Http\Controllers;

use App\File;
use App\Hotel;
use App\Train;
use App\Passenger;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class FileController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $file = File::all();
        return view('file.index',compact('file'));
    }

    // funcion para descargar pdf

    public function exportPdf($code)
    {
         $code = File::where('code','=', $code)->firstOrFail();
         $passenger = Passenger::where('file_id','=',$code->id)->get();
         $hotel = Hotel::where('file_id','=',$code->id)->get();
         $train = Train::where('file_id','=',$code->id)->get();

         $pdf = PDF::loadView('pdf.files',compact('code','passenger','hotel','train'));
         return $pdf->stream('file-'.$code->code.'.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('file.create');
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
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function show($code)
    {
        $code = File::where('code','=', $code)->firstOrFail();
        $passenger = Passenger::where('file_id','=',$code->id)->get();
        $hotel = Hotel::where('file_id','=',$code->id)->get();
        $train = Train::where('file_id','=',$code->id)->get();
        
         return view('file.show',compact('code','passenger','hotel','train'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function edit(File $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(File $file)
    {
        //
    }
}
