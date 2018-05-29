@extends('layout')

@section('contenido')

	<div class="row">
		<div class="col-md-9">
			<div class="row">
			@foreach($contentnews as $new)
				<div class="col-md-6" style="margin-bottom: 15px;">
					<article>
						<div class="picture left" style="width:100%; position: relative;"> 
							<div class="nota_etiqueta">{{$new->label->name}}</div>
							<div class="redes_etiqueta">
								<a href="" ><i class="fa fa-facebook" style="background: #A4A4A4; position: absolute; right: 5px; top: 5px; border-radius: 80px; width: 22px; text-align: center;"></i></a>
							</div>
							<img src="{{asset('storage/'.$new->contentnews[0]->dir_image)}}" style="width:100%;" alt="Planeta Marte" /> <br />
							<div class="article-contenido"><a style="color: white;" href="{{route('newcontent.show', [$new->label->name, $new->id])}}">{{$new->title}}</a></div>
						</div>
					</article>
				</div>
			@endforeach
			</div>

		</div>

		<div class="col-md-3">
			<br>
			@include('columnpublicidad');
		</div>
	</div>

	<br>
	<div class="row">
		<div class="col-md-9">
			<h2 style="text-decoration: underline #6E6E6E;">Últimas Noticias</h2>
			@foreach($contentnews as $new)
			<div class="row">
				<div class="col-md-4">
					<div class="nota_etiqueta">{{$new->label->name}}</div>
					<img src="{{asset('storage/'.$new->contentnews[0]->dir_image)}}" style="width:100%;" alt="Planeta Marte" />
				</div>
				<div class="col-md-8">
					<div style="font-size: 21px; font-weight: bold; font-family: sans-serif;">
						<a style="color: black;" href="{{route('newcontent.show', [$new->label->name, $new->id])}}">{{$new->title}}</a>
					</div>
					<label>{{$new->summary}}</label>
					<div class="fecha_article">
						{{$new->fechaPublicacion}}
					</div>
				</div>
			</div>
			<br>
			@endforeach
		</div>
	</div>	


@stop