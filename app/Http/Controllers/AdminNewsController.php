<?php

//
namespace radioyaravi\Http\Controllers;

use Illuminate\Http\Request;
use radioyaravi\News;
use radioyaravi\Label;
use radioyaravi\Prioridad;
use radioyaravi\ContentNews;
use Config;

class AdminNewsController extends Controller
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
        $news = News::with('label')->orderBy('fechaPublicacion','dsc')->get();
       // return $news;
        return view('news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $labels = Label::all();
        $prioridades = Prioridad::all();

        return view('news.create', compact('labels', 'prioridades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new = new News;
        $new->title = $request->input('titulo');
        $new->summary = $request->input('resumen');
        $new->idUser = auth()->user()->id;
        $new->idLabelNews = $request->input('label');
        $new->idPrioridad = $request->input('prioridad');;
        $new->fechaPublicacion = now();
        $new->estado = Config::get('constantes.estado_habilitado');
        $new->save();

        $contentNew = new ContentNews;
        $contentNew->dir_image = $request->input('dir_image');
        $contentNew->content = $request->input('contenido');
        $contentNew->idNews = $new->id;
        $contentNew->estado = Config::get('constantes.estado_habilitado');
        $contentNew->save();

        return redirect()->route('new.index')->with('info', 'Se creo la etiqueta correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $new = News::with('contentnews')->where('id', $id)->get()->first();
        $labels = Label::all();
        $prioridades = Prioridad::all();

        return view('news.edit', compact('new','labels', 'prioridades'));
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
        $new = News::findOrFail($id);

        return $new;
        $new->title = $request->input('titulo');
        $new->summary = $request->input('resumen');
        $new->idUser = auth()->user()->id;
        $new->idLabelNews = $request->input('label');
        $new->idPrioridad = $request->input('prioridad');;
        $new->fechaPublicacion = now();
        $new->estado = Config::get('constantes.estado_habilitado');
        $new->save();

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

    public function deshabilitar($id)
    {
        $new = News::findOrFail($id);
        $new->estado = Config::get('constantes.estado_deshabilitado');
        $new->update();

        return redirect()->route('new.index');
    }

    public function habilitar($id)
    {
        $new = News::findOrFail($id);
        $new->estado = Config::get('constantes.estado_habilitado');
        $new->update();

        return redirect()->route('new.index');
    }
}
