<?php

namespace App\Http\Controllers;

use App\Models\Vullnerabilitie;
use Illuminate\Http\Request;

class VullnerabilitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Vullnerabilities::index')->with('data', Vullnerabilitie::all());
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
     * @param  \App\Models\Vullnerabilities  $vullnerability
     * @return \Illuminate\Http\Response
     */
    public function show(Vullnerabilitie $vullnerability)
    {
        abort_if(!$vullnerability, 404);

        return view('Vullnerabilities::show')->with("vullnerability", $vullnerability);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vullnerabilities  $vullnerability
     * @return \Illuminate\Http\Response
     */
    public function edit(Vullnerabilitie $vullnerability)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vullnerabilities  $vullnerability
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vullnerabilitie $vullnerability)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vullnerabilities  $vullnerabilities
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vullnerabilitie $vullnerability)
    {
        //
    }
}
