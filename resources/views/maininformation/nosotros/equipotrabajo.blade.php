@extends('layout')

@section('contenido')

	<div class="row">
		<div class="col-md-9">
			<h1>Equipo de Trabajo</h1>

			<strong><h3>Dirección - Gerencia</h3></strong>
			<p>	Andres Javier Mamani <br>	
				direccion@radioyaravi.org.pe</p>

			<strong><h3>Prensa</h3></strong>
			<p>Jefe de Prensa: Maria Luisa Alvarez
				prensa@radioyaravi.org.pe</p>

			<ul>	
				<li>Yolanda Ahumada Machicado</li>
				<li>Hector Tintaya Feria</li>
				<li>Maria Luz Cruz Arrosquipa</li>
				<li>Juan Cervantes Rivera</li>
				<li>Christian Lupaca Huamani</li>
				<li>Hugo Condori Chambilla</li>
				<li>Alexander Cornejo Mamani</li>
				<li>Maria Luisa Alvarez</li>
			</ul>

			<strong><h3>Administración</h3></strong>
			<p>Yenni Valencia Pfccori 
				administracion@radioyaravi.org.pe
				
				Publicidad y Marketing
				Rosario Alarico Zapana
				marketing@radioyaravi.org.pe	
			</p>
			
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