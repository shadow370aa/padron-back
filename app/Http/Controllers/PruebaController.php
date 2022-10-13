<?php

namespace App\Http\Controllers;

use App\Models\prueba;
use Illuminate\Http\Request;
//request es basicamente lo que recibe del from.. viene los datos y los parametros, campos para actualizar


class PruebaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response=prueba::all();//Trae todo lo registros del modelo prueba
        return $response;
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//$request es lo que recibe del from
    {
        $prueba=new prueba;
        $prueba->prueba_id=$request->prueba_id;
        $prueba->prueba_descripcion=$request->prueba_descripcion;
        $prueba->save();
        return 'OK';
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function show(prueba $prueba)
    {
        return $prueba;
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function edit(prueba $prueba)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, prueba $prueba)
    {
        $prueba->prueba_descripcion=$request->prueba_descripcion;
        $prueba->save();
        return 'Se actualizo el registro';
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function destroy(prueba $prueba)
    {
        $prueba->delete();
        return 'se elimino el registro';
        //
    }
    public function funcion_custom()
    {
        return 'Esto es un metodo creado por el usuario';
    }
}
