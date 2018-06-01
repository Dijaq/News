@extends('layout')

@section('contenido')		

	<div class="row">
		<div class="col-md-12">
			<div class="tipo_noticia">
				<h3>
					Empresarial
				</h3>
			</div>
			
			<div class="title_article"><h1>{{$empresarial->title}}</h1></div>

			<div class="summary_article">
				{{$empresarial->summary}}
			</div>

			<div class="fecha_article">
				{{$empresarial->fechaPublicacion}}
			</div>
		</div>
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-12">					
					
					<div class="picture left" style="width:100%;"> 
						<img src="{{asset('storage/'.$empresarial->dir_image)}}" style="width:100%;" alt="Planeta Marte" /> <br />
					</div>
					
				</div>					
			</div>

			<div class="row">
				<div class="content_article col-md-12">
					{!!$empresarial->content!!}
				</div>
			</div>
			
		</div>
		<!--Seccion de Anuncios-->
		<div class="col-md-4">
			
		</div>
	</div>		
	<div class="row">

		<div class="col-md-8">
			<br>
			<br>
			<br>
			<h1>Coméntanos</h1>
		</div>
		<div class="col-md-8">
			<div class="fb-comments" data-href="http://localhost:8000/empresarial/{{$empresarial->id}}"  data-width="100%"  data-numposts="5"></div>
		</div>


	</div>

@stop