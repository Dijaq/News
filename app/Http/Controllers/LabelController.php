<?php

namespace radioyaravi\Http\Controllers;

use Illuminate\Http\Request;
use radioyaravi\Label;
use radioyaravi\Http\Requests\CreateLabelRequest;
use Config;

class LabelController extends Controller
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
        $labels = Label::all();
        return view('labels.index', compact('labels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('labels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateLabelRequest $request)
    {
        $label = new Label;
        $label->name = $request->input('nombre');
        $label->color = $request->input('color_etiqueta');
        $label->estado = Config::get('constantes.estado_habilitado');

        $label->save();

        return redirect()->route('label.index')->with('info', 'Se creo la etiqueta correctamente');
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
        $label = Label::findOrFail($id);
        return view('labels.edit', compact('label'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateLabelRequest $request, $id)
    {
        $label = Label::findOrFail($id);

        $label->name = $request->input('nombre');
        $label->color = $request->input('color_etiqueta');      
        
        $label->update();

        return redirect()->route('label.index');
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
        $label = Label::findOrFail($id);
        $label->estado = Config::get('constantes.estado_deshabilitado');
        $label->update();

        return redirect()->route('label.index');
    }

    public function habilitar($id)
    {
        $label = Label::findOrFail($id);
        $label->estado = Config::get('constantes.estado_habilitado');
        $label->update();

        return redirect()->route('label.index');
    }
}
