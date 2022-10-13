<?php

namespace App\Http\Controllers;

use App\Models\mas_pda;
use Illuminate\Http\Request;

class MasPdaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response=mas_pda::all();//Trae todo lo registros del modelo prueba
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mas_pda  $mas_pda
     * @return \Illuminate\Http\Response
     */
    public function show(mas_pda $mas_pda,Request $request) //returna solo una consulta
    {
        //return $mas_pda;
        $respuesta=[];
        if ($request->ci!=null){
            $respuesta=mas_pda::where('NUMERO_CED','=',$request->ci)->first();//la funcion firtst() es para traer solo uno
            return $respuesta;
        }elseif ($request->nombre!=null) {
            $respuesta=mas_pda::where('NOMBRE','LIKE',$request->nombre.'%')->get();// la funcion get() es para traer todo lo que encuentra
            return $respuesta;
        }elseif ($request->apellido!=null) {
            $respuesta=mas_pda::where('APELLIDO','LIKE',$request->apellido.'%')->get();// la funcion get() es para traer todo lo que encuentra
            return $respuesta;
        }
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mas_pda  $mas_pda
     * @return \Illuminate\Http\Response
     */
    public function edit(mas_pda $mas_pda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mas_pda  $mas_pda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mas_pda $mas_pda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mas_pda  $mas_pda
     * @return \Illuminate\Http\Response
     */
    public function destroy(mas_pda $mas_pda)
    {
        //
    }
}
