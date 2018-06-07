<?php

namespace radioyaravi\Http\Controllers;

use DB;
use radioyaravi\Publicidad;
use radioyaravi\User;
use Illuminate\Http\Request;
use Config;
use radioyaravi\Http\Requests\CreatePublicityRequest;
use Intervention\Image\ImageManager;

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
        $image       = $request->file('dir_image');
        $filename    = $image->getClientOriginalName();
        
        $image_resize = \Image::make($image->getRealPath());
        list($width, $height) = getimagesize($image);

        if($width >= 800)
        {
            $newWidth = 800;
            $lessWidth = ($width-$newWidth)/$width;
            $newHeight = $height-$lessWidth*$height; 
            $image_resize->resize($newWidth, $newHeight);
        }

        if (!file_exists(storage_path('app\public\publicity\\')))
        {
             //mkdir(public_path('publicity\\'), 777, true);
             return 'El directorio no existe';
        }
        //return public_path('publicity');
        $image_resize->save(storage_path('app\public\publicity\\'. $filename));

        //$directorio = $request->file('dir_image')->store('public/publicity'); 
        $directorio = 'public/publicity/'.$filename; 
        $publicity = new Publicidad;
        $publicity->idUser = auth()->user()->id;
        $publicity->name = $request->input('nombre');
        $publicity->url_page = $request->input('url_publicidad');
        $publicity->dir_image = $directorio;
        $publicity->fechaInicio = $request->input('fechaInicio');
        $publicity->fechaFin = $request->input('fechaFin');   
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
        $publicidad->fechaInicio =  date("Y-m-d", strtotime($publicidad->fechaInicio));
        $publicidad->fechaFin =  date("Y-m-d", strtotime($publicidad->fechaFin));
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
        $publicidad->fechaInicio = $request->input('fechaInicio');
        $publicidad->fechaFin = $request->input('fechaFin');   
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
