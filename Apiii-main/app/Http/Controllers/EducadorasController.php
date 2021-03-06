<?php

namespace App\Http\Controllers;

use App\Models\Educadora;
use Illuminate\Http\Request;

class EducadorasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Educadora::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $educadora = new Educadora();
        $educadora->cod_tia = $request->cod_tia;
        $educadora->nombre = $request->nombre;
        $educadora->telefono = $request->telefono;
        $educadora->cod_curso = $request->cod_curso;
        $educadora->save();
        return $educadora;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Educadora  $educadora
     * @return \Illuminate\Http\Response
     */
    public function show(Educadora $educadora)
    {
        return $educadora;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Educadora  $educadora
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Educadora $educadora)
    {
        $educadora->nombre = $request->nombre;
        $educadora->telefono = $request->telefono;
        $educadora->cod_curso = $request->cod_curso;
        $educadora->save();
        return $educadora;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Educadora  $educadora
     * @return \Illuminate\Http\Response
     */
    public function destroy(Educadora $educadora)
    {
        $educadora->delete();
    }
}
