<?php


//Controlador que administra el contenido de una noticia
namespace radioyaravi\Http\Controllers;

use Illuminate\Http\Request;
use radioyaravi\News;
use radioyaravi\ContentNews;
use radioyaravi\Label;
use Config;

class NewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($name, $id)
    {
         $labels = Label::all();
        $detailnew = News::with('label')->with('contentnews')->get()->where('id', $id)->first();
        
        $moreNews = News::with('contentnews')->take(Config::get('constantes.numero_noticias_relacionadas'))->get()->where('idLabelNews', $detailnew->idLabelNews);

        return view('main_news.detailnew', compact('detailnew', 'contentNew', 'moreNews', 'labels'));
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
