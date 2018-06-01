<?php

namespace radioyaravi\Http\Controllers;

use Illuminate\Http\Request;
use radioyaravi\Empresarial;
use Config;

class EmpresarialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresariales = Empresarial::all();
        
        return view('empresarial.index', compact('empresariales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresarial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empresarial = new Empresarial;
        $empresarial->title = $request->input('titulo');
        $empresarial->summary = $request->input('resumen');
        $empresarial->idUser = auth()->user()->id;
        $empresarial->fechaPublicacion = now();
        $empresarial->dir_image = $request->input('dir_image');
        $empresarial->content = $request->input('contenido');
        $empresarial->estado = Config::get('constantes.estado_habilitado');
        $empresarial->save();

        return redirect()->route('empresarial.index')->with('info', 'Se creo la noticia empresarial correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
