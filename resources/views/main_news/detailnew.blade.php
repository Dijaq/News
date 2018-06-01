@extends('layout')

@section('contenido')		

	<div class="row">
		<div class="col-md-12">
			<div class="tipo_noticia">
				<h3>
					<label for="" style="background-color: #690; color: white; padding: 2px; font-family: Gremoria;">{{$detailnew->label->name}}</label>
				</h3>
			</div>
			
			<div itemprop="headline" class="title_article"><h1>{{$detailnew->title}}</h1></div>

			<div class="summary_article" itemprop="description">
				{{$detailnew->summary}}
			</div>

			<div class="fecha_article">
				{{$detailnew->fechaPublicacion}}
			</div>
		</div>
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-12">					
					
					<div class="picture left" style="width:100%;"> 
						<img src="{{asset('storage/'.$detailnew->contentnews[0]->dir_image)}}" style="width:100%;" alt="Planeta Marte" /> <br />
					</div>
					
				</div>					
			</div>

			<div class="row">
				<div class="content_article col-md-12">
					{!!$detailnew->contentnews[0]->content!!}
				</div>
			</div>
			
		</div>
		<!--Seccion de Anuncios-->
		<div class="col-md-4">
			<div class="row" style="font-weight: bold;">
				Más de {{$detailnew->label->name}}
			</div>
			@foreach($moreNews as $moreNew)
				<div class="row more_article">					
					<div class="col-md-5" style="padding: 0px">
						<img class="image" src="{{asset('storage/'.$moreNew->contentnews[0]->dir_image)}}" alt="Planeta Marte" / width="100%">
					</div>
					<div class="title_more_article col-md-7">
						<a style="color: black;" href="{{route('newcontent.show', [$moreNew->label->name, $moreNew->id])}}">{{$moreNew->title}}</a>
					</div>
				</div>
				<br>
			@endforeach

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
			<div class="fb-comments" data-href="http://localhost:8000/nota/{{$detailnew->label->name}}/{{$detailnew->id}}"  data-width="100%"  data-numposts="5"></div>
		</div>


	</div>

@stop