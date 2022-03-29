<?php

namespace App\Http\Controllers;

use App\Models\Ocupacion;
use App\Http\Requests\StoreOcupacionRequest;
use App\Http\Requests\UpdateOcupacionRequest;
use Illuminate\Support\Facades\DB;

class OcupacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ocupaciones= DB::table('ocupaciones')->get();
        return view('ocupaciones.index')->with(['ocupaciones'=>$ocupaciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        return view('ocupaciones.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOcupacionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOcupacionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ocupacion  $ocupacion
     * @return \Illuminate\Http\Response
     */
    public function show(Ocupacion $ocupacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ocupacion  $ocupacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Ocupacion $ocupacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOcupacionRequest  $request
     * @param  \App\Models\Ocupacion  $ocupacion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOcupacionRequest $request, Ocupacion $ocupacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ocupacion  $ocupacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ocupacion $ocupacion)
    {
        //
    }
}
