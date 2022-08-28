<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVullnerabilityRequest;
use App\Http\Requests\UpdateVullnerabilityRequest;
use App\Models\Vullnerabilitie;
use App\Repository\VullnerabilitiesRepository;

class VullnerabilitiesController extends Controller
{

    public function __construct(private VullnerabilitiesRepository $repository){}

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
        return view('Vullnerabilities::create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateVullnerabilityRequest $request) 
    {
        $this->repository->create($request->validated());
        return redirect()->route('vullnerabilities.index');
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
        abort_if(!$vullnerability, 404);

        return view('Vullnerabilities::edit')->with("vullnerability", $vullnerability);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vullnerabilities  $vullnerability
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVullnerabilityRequest $request, Vullnerabilitie $vullnerability)
    {
        $this->repository->update($vullnerability->id, $request->validated());
        return redirect()->route('vullnerabilities.edit', $vullnerability->id)->with('success', 'Vullnerability Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vullnerabilities  $vullnerabilities
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vullnerabilitie $vullnerability)
    {
        return $this->repository->delete($vullnerability->id);
    }
}
