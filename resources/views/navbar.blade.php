<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/simple-sidebar.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/bootstrap-editable.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/sidebar.css') }}" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
	
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
		<script src="{{ asset('/js/eliminarUsuario.js') }}"></script>
			<script src="{{ asset('/js/eliminarRegistro.js') }}"></script>
		<script src="{{ asset('/js/editar.js') }}"></script>
</head>
<body style="background-color:white">
	<div class="container-fluid" style="z-index:100; position:absolute; top:-10px">
	<div class="row" style="background-color: #FFBF00;">
		<div class="col-md-4">
			<span style="color:#FFBF00;">......</span><img src="{{ asset('/img/continental_logo2.png') }}"  width="240px" height="35px" alt="">
		</div>
		<div class="col-md-8">
		</div>
	</div>
			</div>	
	<nav class="navbar navbar-default" style="border-bottom:5px solid #222;  background-color:#FFBF00" >
  		<div class="container-fluid"   >
    <!-- Brand and toggle get grouped for better mobile display -->
    
    		<div class="navbar-header ">
    			<a class="navbar-brand" href="{{ url('goMain') }}" >
        		<span style="color:#FFBF00;">.........................................................................................................................</span><span style="color:black;"><b>LINEA NVLD-BMW</b></span>
      			</a>
 			</div>
      		

  		<ul class="nav navbar-nav navbar-right">
    		@if (Auth::guest())
				<li><a href="{{ url('custom_auth/login') }}">Iniciar Sesión</a></li>
			@else
				<li>
						<a href="{{ url('goMain') }}">
						Principal <span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
					</li>
				@if(Auth::user()->tipo=='superusuario')
					<li>
						<a href="{{ route('administrador.usuarios.index') }}">
						Control Usuarios <span class="glyphicon glyphicon-align-leftglyphicon glyphicon-user" aria-hidden="true"></span></a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->nombre }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ route('administrador.usuarios.edit',Auth::user()) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true">Editar usuario</a></li>
								<li><a href="{{ url('/custom_auth/logout') }}"><span class="glyphicon glyphicon-off" aria-hidden="true">Cerrar Sesión</a></li>
				@else
					<li >
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->nombre }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ route('getMessage') }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true">Cambiar contraseña</a></li>
								<li><a href="{{ url('/custom_auth/logout') }}"><span class="glyphicon glyphicon-off" aria-hidden="true">Cerrar Sesión</a></li>
					</li>

				@endif
								
							</ul>
						</li>
					@endif
      	</ul>
   		
	</nav>

@yield('content')

</body>



</html>