@extends('layout')

@section('contenido')

	<div class="row">
		<div class="col-md-9">
			<h1>Historia</h1>

			<iframe width="100%" height="400" src="https://www.youtube.com/embed/Q989Lvuqjo4?ecver=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			
			<p>Radio Yaraví se inicia  hace mas de  33 años  con el  Centro de  Comunicación Amakella, cuando un grupo de comunicadores sociales, promovidos por el  padre  Eloy Arribas Lázaro, inician la experiencia  de radio a  través  de alto parlantes en el  Distrito de Miraflores.</p>
 
			<p>Para tener mayor impacto y llegar   en toda  Arequipa se decide  tener una emisora propia: “Radio Yaraví” en los 930 en  la  AM  y en los  106.3 de  la  FM.</p>
			 
			<p>Desde 1993, hace  24 años, Radio Yaraví ha apostado por una sociedad democrática, justa y en igualdad de condiciones, la que se traduce en la diferente programación radial.  Como uno de los principales logros se puede destacar  la credibilidad  como emisora.  Actualmente  Radio Yaraví,  como parte del Centro del Comunicación  Amakella, es seguir promoviendo el desarrollo local, la defensa de los derechos y el ejercicio de  la ciudadanía, como bien dice su slogan está “con todas las voces”; constituyendo el único referente en una comunicación para el desarrollo en nuestra región.</p>
		</div>

		<div class="col-md-3">
			<br><br>
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

