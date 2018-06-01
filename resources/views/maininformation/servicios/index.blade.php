@extends('layout')

@section('contenido')

	<div class="row">
		<div class="col-md-9">
			<h1>Servicios</h1>
			
			<strong>Publicidad</strong>
			<p>Radio Yaravi trasmite su señal a través de la Frecuencia Modulada 106.3 (FM) y Amplitud Modulada 930 (AM) y vía internet www.radioyaravi.org.pe con una amplia cobertura además contamos con una variada programación pensada en nuestro público con una diversidad de horarios:</p>

			<ul>
				
			</ul>

			<li>De 5:00 am a 09:00am - público adulto</li>
			<li>De 9:00 am a 12:00am - público familiar.</li>
			<li>De 3:00 pm a 06:00pm - público joven</li>
			<li>De 7:00 pm a 12:00pm - público adulto y joven.</li>

			<p>Asimismo estamos en los principales estudios de sondeo de opinión como es el estudio del CPI .</p>

			<p>Recuerde que en anunciar en Radio Yaraví es garantizar la credibilidad y transparencia de su empresa.
				Contacto: marketing@radioyaravi.org.pe</p>

			<strong>Producciones radiales</strong>
			<p>La trayectoria de Radio Yaraví es reconocida por varias instituciones y organizaciones con las cuales se ha trabajado diversas producciones radiales con calidad y eficiencia.
				Manuelito (hacer un resumen de la producción, si se puede acompañar con un imagen)
				Contacto: produccion@radioyaravi.org.pe</p>

			<strong>Capacitación</strong>
			<p>Radio Yaraví a través del Centro de Comunicación Amakella es un semillero de comunicadores sociales fortaleciendo habilidades y capacidades de grupos humanos de organizaciones en el plan comunicacional, teniendo amplia experiencia en la formación de comunicadores.</p>

			<ul>
				<li>Comunicadores juveniles hacer un resumen de la producción, si se puede acompañar con un imagen)</li>
				<li>Periodismo escolar</li>
				<li>Comunicadores inclusivos</li>
			</ul>			
			Contacto: direccion@radioyaravi.org.pe</p>

			<strong>Campañas</strong>
			<p>En el marco de la Comunicación para el Desarrollo que realiza Radio Yaraví - Centro de Comunicación Ama Kella realizamos y apoyamos una serie de campañas con la finalidad de contribuir con el desarrollo local sostenible desde la comunicación; dándole sentido a nuestro slogan pues estamos con todas las voces!</p>

			<ul>
				<li>Campaña “Ponle seguro al taxi”</li>
				<li>Campaña “El agua”</li>
				<li>Contacto: direccion@radioyaravi.org.pe</li>
			</ul>

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