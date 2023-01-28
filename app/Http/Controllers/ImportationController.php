<?php

namespace App\Http\Controllers;

use App\Imports\FileImport;
use App\Models\Importation;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('import.index');
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
        // dd($request->all());
        Excel::import(new FileImport, $request->file("csv_file"));
        return to_route("importation.index")->with("success","File import successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Importation  $importation
     * @return \Illuminate\Http\Response
     */
    public function show(Importation $importation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Importation  $importation
     * @return \Illuminate\Http\Response
     */
    public function edit(Importation $importation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Importation  $importation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Importation $importation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Importation  $importation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Importation $importation)
    {
        //
    }
}
