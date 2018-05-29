@extends('layoutuser')

@section('contenido')

  <div style="text-align:center;">
    <h1>Nueva Publicidad</h1>
    <br>
    @if(session()->has('info'))
      <h3>{{session('info')}}</h3>
    @else

       <div align="center">
          <form method="POST" style="width: 80%;" action="{{route('publicity.store')}}" enctype="multipart/form-data">
         
           {!!csrf_field()!!}
         
           <div class="row">
         
             <div class="col-md-4">
               <label for="nombre">
                 Nombre de la Publicidad: 
               </label>
             </div>
               <div class="col-md-8"><input class="form-control" type="text" name="nombre" value="{{old('nombre')}}">
                 {!! $errors->first('nombre', '<span class="error">:message</span>') !!}</div>
             <br><br>
             <div class="col-md-4">
               <label for="url_publicidad">
                 Ingrese URL de la pagina:
               </label>
             </div>
               <div class="col-md-8">
                 <input class="form-control" type="text" name="url_publicidad" value="{{old('url_publicidad')}}">
                 {!! $errors->first('url_publicidad', '<span class="error">:message</span>') !!}
               </div>
                   <br><br>
              <div class="col-md-4">
                <label for="dir_imagen">
                  Imagen de publicidad:
                </label>
              </div>
              <div class="col-md-8">
                 <div class="custom-file">
                    <input type="file" class="custom-file-input" id="validatedCustomFile" name="imagenPublicidad">
                    <label class="custom-file-label" for="validatedCustomFile">Elige una imagen</label>
                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                    {!! $errors->first('imagenPublicidad', '<span class="error">:message</span>') !!}
                  </div>
              </div> 

              <br><br>
             <div class="col-md-12"><input class="btn btn-primary" type="submit" value="Crear"></div>
           </div>
         
         </form>
       </div>
    @endif
  </div>

@stop