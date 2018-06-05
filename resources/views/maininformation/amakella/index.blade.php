@extends('layout')

@section('contenido')

	<div class="row">
		<div class="information_radio col-md-9">
			<h1>Amakella</h1>
			
			<p>El Centro de Comunicación Amakella en el campo de la comunicación se abre paso gracias a la pasión por la radio del padre Eloy Arribas Lázaro que junto a un grupo de entusiastas jóvenes de barrio crea el Centro de Comunicación Amakella inspirado en lo que fue el boletín del mismo nombre repartido desde inicios de los años 70 en la Parroquia Cristo Obrero de Edificadores Misti, distrito Miraflores.</p>

			<p>Como centro de producción promocionó una red de equipos de bocinas en Arequipa, programas en diferentes emisoras, producciones de series radiales. Doce años más tarde, en 1993 la etapa de experimentación se plasma en una emisora. Ese año “Radio Yaraví” es una realidad, siendo Eloy su director. Muchos proyectos de desarrollo, de participación ciudadana se promovieron a través de programas radiales durante éstos años. También se trabajó en forma conjunta con Instituciones y ONGD.</p>

			<p>Cuando es nombrado Secretario Ejecutivo de ALER (Asociación Latinoamericana de Educación Radiofónica), cae enfermo, quedando muchos proyectos por hacer y compartir, Es en España su tierra natal, en Pedrajas y junto a su familia que intenta recuperarse pero fallece una tarde del 29 abril del 2002.</p>

			<p>Actualmente Amakella es un referente en producción radial e investigación comunicacional; contagiados por la pasión que Eloy demostró en la búsqueda de un verdadero desarrollo de los pueblos.</p>
					</div>

		<div class="col-md-3">
			<br>
			@include('columnpublicidad');
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
			<div class="fb-comments" data-href="http://localhost:8000/yaravi/programacion"  data-width="100%"  data-numposts="5"></div>
		</div>
	</div>
	<br>

@stop