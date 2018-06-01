<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/dropzone.js')}}"></script>
	<title>Yaravi</title>
</head>
<body>
	<nav class="navbar navbar-expand-sm" role="navigation" style="background: #74AB72;">
		<div class="container">				
			<div class="collapse navbar-collapse" id="navegacion_fm">
				<ul class="navbar-nav">
					<!--<li class="nav-item" class="active"><a class="nav-link nav-link-c" href="#">Nosotros</a></li>-->

					<li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
				          Nosotros
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href={{route('nosotros.quienessomos')}}>Quienes Somos</a>
				          <a class="dropdown-item" href={{route('nosotros.historia')}}>Historia</a>
				          <a class="dropdown-item" href={{route('nosotros.equipotrabajo')}}>Equipo de Trabajo</a>
				        </div>
				      </li>
					
					<li class="nav-item"><a class="nav-link nav-link-c" href={{route('servicios.index')}}>Servicios</a></li>
					<li class="nav-item"><a class="nav-link nav-link-c" href={{route('programacion.index')}}>Programación</a></li>
					<li class="nav-item"><a class="nav-link nav-link-c" href={{route('amakella.index')}}>Ama Kella</a></li>
				</ul>
			</div>
			
			<div class="col-md-3" align="right" style="position: relative;">
				<div class="row">
					<div class="col-md-8"  align="left">
						En vivo ahora<br>	
						106.3FM - 930AM
					</div>
					<div class="play_en_vivo" align="right"  style="position: absolute; right: 20px; top: 5px;">
						<img height="40px" src="{{asset('storage/play_button.png')}}" alt="">
					</div>
				</div>
			</div>			
		</div>
	</nav>
	<div class="container" style="background: #EFF5FB;">

		<div class="row">			
				<div class="col-md-5"></div>
				<div class="col-md-2">
					<img src={{asset('storage/Yaravi.png')}} style="width:100%;" alt="Radio Yaravi" />
				</div>
				<div class="col-md-5"></div>
		</div>

		<nav class="navbar navbar-expand-sm" role="navigation" style="background: #537CD5; height: 40px; ">
			<div class="container">
				
				<div class="collapse navbar-collapse" id="navegacion_fm">
					<ul class="navbar-nav">
						<li class="nav-item" style="border-right: solid 1px #D8D8D8;" class="active"><a class="nav-link nav-link-c" href={{route('home')}}>Principal</a></li>
						@foreach($labels as $label)
							<li class="nav-item" style="border-right: solid 1px #D8D8D8;"><a class="nav-link nav-link-c" href={{route('classified.show', $label->id)}}>{{$label->name}}</a></li>
						@endforeach
					</ul>
				</div>
			</div>
		</nav>
		<br>
		@yield('contenido')

	</div>

	<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.0';
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>	

	
	<footer id="myFooter">
        <div class="footerHeader" ></div>
	    <div class="container">
			<div class="row">
				<div class="col-md-4" >
				    <h2>Dirección</h2>
				    <ul>
				        <li><h6>Calle Los Robles 139</h6></li>
				        <li><h6>Urb. Orrantia - Cercado</h6></li>
				        <li><h6>Telf. 054-213172/054-289952</h6></li>
				    </ul>
				</div>
				
				<div class="col-md-4">
				    <h2>Ubícanos </h2>
				    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1053.573524112113!2d-71.52804020320283!3d-16.399446859575992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424a546d1d2775%3A0x79bc706259b3c6b6!2sRadio+Yarav%C3%AD!5e0!3m2!1ses!2spe!4v1527695419620" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="col-md-4" >
				    <h2>Correo Electrónico</h3>
				    <ul>
				        <li><h6>prensa@radioyaravi.org.pe</h6></li>
				        <li><h6>marketing@radioyaravi.org.pe</h6></li>
				        <li><h6>direccion@radioyaravi.org.pe</h6></li>	          
				    </ul>
				    
				    <ul class="sm">
				        <li><a href="https://www.facebook.com/Radio-Yarav%C3%AD-Arequipa-231060803576406/" target="_blank"><img src="https://www.facebook.com/images/fb_icon_325x325.png" class="img-responsive"></a></li>
				        <li><a href="#" ><img src="https://lh3.googleusercontent.com/00APBMVQh3yraN704gKCeM63KzeQ-zHUi5wK6E9TjRQ26McyqYBt-zy__4i8GXDAfeys=w300" class="img-responsive" ></a></li>
				        <li><a href="#" ><img src="https://playbookathlete.com/wp-content/uploads/2016/10/twitter-logo-4.png" class="img-responsive"  ></a></li>
				    </ul>
				</div>
			</div>
	    </div>
    </footer>
</body>
</html>

