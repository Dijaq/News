<?php

namespace radioyaravi\Http\Controllers;

use Illuminate\Http\Request;
use radioyaravi\Publicidad;
use radioyaravi\News;
use radioyaravi\Label;
use Config;

class MainController extends Controller
{
    function __construct()
    {
        $this->middleware('verifypage');
    }
    
    public function home()
    {
    	$publicidades = Publicidad::all()->where('estado', Config::get('constantes.estado_habilitado'));
        $labels = Label::all();
        $idPublicidad = $publicidades->first()->id;
    	//$contentnews = News::with('contentnews')->get();
    	$contentnews = News::with('label')->with('contentnews')->get();


        $new_principal = News::with('label')->with('contentnews')->where('idPrioridad', Config::get('constantes.prioridad_principal'))->orderBy('fechaPublicacion', 'desc')->get()->first();

        $new_secundaria = News::with('label')->with('contentnews')->where('idPrioridad', Config::get('constantes.prioridad_secundaria'))->orderBy('fechaPublicacion', 'desc')->get()->first();

    	//return $contentnews;
		return view('main_news.home', compact('publicidades', 'contentnews', 'idPublicidad', 'new_principal', 'new_secundaria', 'labels'));
	}

    //CLASSIFIED FILE
    public function show($labelName)
    {
        $publicidades = Publicidad::all()->where('estado', Config::get('constantes.estado_habilitado'));
        $labels = Label::all();
        $idPublicidad = $publicidades->first()->id;
        //$contentnews = News::with('contentnews')->get();
        $contentnews = News::with('label')->with('contentnews')->where('idLabelNews', $labelName)->get();

        return view('main_news.classified', compact('publicidades', 'contentnews', 'idPublicidad', 'new_principal', 'new_secundaria', 'labels'));
    }

}
