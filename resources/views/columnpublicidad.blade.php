
	<div class="publicidad_etiqueta">Publicidad</div>

	<div class="carousel slide" id="carousel-1" data-ride="carousel">
	<!--Indicadores-->
		
		<!--Contenedor de los slide-->
		<div class="carousel-inner">

			@foreach($publicidades as $publicidad)
				@if($idPublicidad === $publicidad->id)
					<div class="carousel-item active">
				@else
					<div class="carousel-item">
				@endif
					<a href="{{$publicidad->url_page}}" target="_blank"><img src="{{Storage::url($publicidad->dir_image)}}" alt="" class="img-responsive" style="width:100%;"></a>
				</div>
			@endforeach

		</div>
	</div>
	<br><br>

	<div class="clima">
		<a class="weatherwidget-io" href="https://forecast7.com/es/n16d41n71d54/arequipa/" data-label_1="AREQUIPA" data-label_2="Clima" data-mode="Forecast" data-days="3" data-theme="gray" >AREQUIPA Clima</a>
		<script>
		!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
		</script>
	</div>