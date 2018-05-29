<?php

namespace radioyaravi\Http\Controllers;

use DB;
use radioyaravi\Publicidad;
use radioyaravi\User;
use Illuminate\Http\Request;
use Config;
use radioyaravi\Http\Requests\CreatePublicityRequest;

class PublicityController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicidades = Publicidad::orderBy('estado', 'desc')->get();
        return view('publicity.index', compact('publicidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('publicity.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePublicityRequest $request)
    {
        $directorio = $request->file('imagenPublicidad')->store('public/publicity');  
        $publicity = new Publicidad;
        $publicity->idUser = 1;
        $publicity->name = $request->input('nombre');
        $publicity->url_page = $request->input('url_publicidad');
        $publicity->dir_image = $directorio;
        $publicity->estado = Config::get('constantes.estado_habilitado');
        $publicity->save();

        return redirect()->route('publicity.index')->with('info', 'Se creo la publicadad correctamente');
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
        $publicidad = Publicidad::findOrFail($id);
        return view('publicity.edit', compact('publicidad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreatePublicityRequest $request, $id)
    {
        $publicidad = Publicidad::findOrFail($id);

        $publicidad->name = $request->input('nombre');
        $publicidad->url_page = $request->input('url_publicidad');
        $publicidad->dir_image = $request->input('dir_image');
        
        $publicidad->update();

        return redirect()->route('publicity.index');
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deshabilitar($id)
    {
        $publicidad = Publicidad::findOrFail($id);
        $publicidad->estado = Config::get('constantes.estado_deshabilitado');
        $publicidad->update();

        return redirect()->route('publicity.index');
    }

    public function habilitar($id)
    {
        $publicidad = Publicidad::findOrFail($id);
        $publicidad->estado = Config::get('constantes.estado_habilitado');
        $publicidad->update();

        return redirect()->route('publicity.index');
    }
}
