@extends('layout')

@section('contenido')

	<div class="row">
		<div class="col-md-7">
			<article>
				<div class="picture left" style="width:100%; position: relative;" > 
					<div class="nota_etiqueta">{{$new_principal->label->name}}</div>
					<div class="redes_etiqueta">
						<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.pachamamaradio.org%2F&amp;src=sdkpreparse"" ><i style=" position: absolute; right: 5px; top: 5px;   text-align: center;">
							<img src="https://www.facebook.com/images/fb_icon_325x325.png" class="img-responsive" width="22px">
						</i>
						</a>
					</div>
					<img src="{{asset('storage/'.$new_principal->contentnews[0]->dir_image)}}" style="width:100%;" alt="Planeta Marte" /> <br />
					<div class="article-principal" style="position: absolute; bottom: 0px; ">
						<!--opacity: 0.4;-->
					<h3><a style="color: white;" href="{{route('newcontent.show', [$new_principal->label->name, $new_principal->id])}}">{{$new_principal->title}}</a></h3></div>
				</div>
				<div>
						{{$new_principal->summary}}
				</div>
			</article>
		</div>

		<div class="col-md-5">			
			<article>
				<div class="picture left" style="width:100%; position: relative;"> 
					<div class="nota_etiqueta">{{$new_secundaria->label->name}}</div>
					<div class="redes_etiqueta">
						<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.pachamamaradio.org%2F&amp;src=sdkpreparse"" ><i style=" position: absolute; right: 5px; top: 5px;   text-align: center;">
							<img src="https://www.facebook.com/images/fb_icon_325x325.png" class="img-responsive" width="22px">
						</i>
						</a>
					</div>
					<img src="{{asset('storage/'.$new_secundaria->contentnews[0]->dir_image)}}" style="width:100%;" alt="Planeta Marte" /> <br />
					<div class="article-contenido"><a style="color: white;" href="{{route('newcontent.show', [$new_secundaria->label->name, $new_secundaria->id])}}">{{$new_secundaria->title}}</a></div>
				</div>
				<div>
					{{$new_secundaria->summary}}
				</div>
			</article>
			
		</div>				
	</div>

	<div class="row">
		<div class="col-md-9">
			<br>

			<div class="row">
			@foreach($contentnews as $new)
				<div class="col-md-4" style="margin-bottom: 15px; padding-right: 5px;">
					<article>
						<div class="picture left" style="width:100%; position: relative;"> 
							<div class="nota_etiqueta">{{$new->label->name}}</div>
							<div class="redes_etiqueta">
								<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.pachamamaradio.org%2F&amp;src=sdkpreparse"" ><i style=" position: absolute; right: 5px; top: 5px;   text-align: center;">
									<img src="https://www.facebook.com/images/fb_icon_325x325.png" class="img-responsive" width="22px">
								</i>
								</a>
							</div>
							<img src="{{asset('storage/'.$new->contentnews[0]->dir_image)}}" style="width:100%;" alt="Planeta Marte" /> <br />
							<div class="article-contenido"><a style="color: white;" href="{{route('newcontent.show', [$new->label->name, $new->id])}}">{{$new->title}}</a></div>
						</div>
					</article>
				</div>
			@endforeach

				<div class="col-md-12">
					<div class="empresarial_etiqueta">
						Empresariales
					</div>
					<br>
					@foreach($empresariales as $empresarial)
						<div class="row">
							<div class="col-md-5">
								<img src="{{asset('storage/'.$empresarial->dir_image)}}" style="width:100%;" alt="Planeta Marte" />
							</div>
							<div class="col-md-7">
								<div style="font-size: 21px; font-weight: bold; font-family: sans-serif;">
									<a style="color: black;" href="{{route('empresarial.detail', $empresarial->id)}}">{{$empresarial->title}}</a>
								</div>
								<label>{{$empresarial->summary}}</label>
								<div class="fecha_article">
									{{$empresarial->fechaPublicacion}}
								</div>
							</div>
						</div>
						<br>
						@endforeach
				</div>

			</div>

		</div>

		<!--Seccion de Anuncios-->
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
	