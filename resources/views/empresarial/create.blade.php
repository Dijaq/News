@extends('layoutuser')

@section('contenido')

  <div align="center">
  <h1 style="text-align:center;">Nueva Empresarial</h1>
  <br>
  @if(session()->has('info'))
    <h3>{{session('info')}}</h3>
  @else
      <!--<form action="/file-upload"
        class="dropzone"
        id="my-awesome-dropzone">
      </form>-->

      <div align="center">
        <form method="POST"  style="width: 90%;" action="{{route('empresarial.store')}}">
        
          {!!csrf_field()!!}
        
          <div class="row">
        
            <div class="col-md-3">
              <label for="titulo" style="text-align:left;">
                Titulo: 
              </label>
            </div>
              <div class="col-md-9"><input class="form-control" type="text" name="titulo" value="{{old('titulo')}}">
                {!! $errors->first('titulo', '<span class="error">:message</span>') !!}</div>
            <br><br>
         
            <div class="col-md-3">
              <label for="resumen" style="text-align:left;">
                Resumen:
              </label>
            </div>
              <div class="col-md-9">
                <input class="form-control" type="text" name="resumen" value="{{old('resumen')}}">
                {!! $errors->first('resumen', '<span class="error">:message</span>') !!}
              </div>
                  <br><br>
            <div class="col-md-3">
              <label for="dir_imagen" style="text-align:left;">
                Directorio de la imagen:
              </label>
            </div>
            <div class="col-md-9">
                <input class="form-control" type="text" name="dir_image" value="{{old('dir_image')}}">
                {!! $errors->first('dir_image', '<span class="error">:message</span>') !!}
                  <br>
            </div>
            <div class="col-md-3">
              <label for="contenido" style="text-align:left;">
                Contenido:
              </label>
            </div>
            <div class="col-md-9">
                <textarea rows="15" class="form-control"  name="contenido">{{old('contenido')}}  
                </textarea>
                {!! $errors->first('contenido', '<span class="error">:message</span>') !!}
            </div> 
            
          </div>
          <div class="row">
            <div class="col-md-12"><input class="btn btn-primary" type="submit" value="Crear Noticia"></div>
          </div>
        
        </form>
      </div>

      <script src={{asset('ckeditor/ckeditor.js')}}></script>
      <script>
        CKEDITOR.config.height = 400;
        CKEDITOR.config.width = 'auto';
        CKEDITOR.replace('contenido');
      </script>
      <script>
        Dropzone.options.myAwesomeDropzone = {
          paramName: "file", // Las imágenes se van a usar bajo este nombre de parámetro
          maxFilesize: 2 // Tamaño máximo en MB
        };
      </script>
  @endif
  </div>

@stop