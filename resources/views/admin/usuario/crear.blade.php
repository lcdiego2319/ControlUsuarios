@extends('navbar')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-warning">
				<div class="panel-heading" style="font-size:18px" >Nuevo usuario</div>
				<div class="panel-body">
					@include('admin.usuario.secciones.validacion')
					{!!Form::open(['route' => 'administrador.usuarios.store','method' => 'POST'])!!}
            			@include('admin.usuario.secciones.forms');

              			<div class="row">
            				<div class="col-md-4"></div>
            				<div class="col-md-4" style="text-align:center;">
              					<button type="submit" class="btn btn-warning btn-block">Crear usuario</button>
              					
            				</div>
            				<div class="col-md-4">
            				</div>
          				</div>
          			{!!Form::close()!!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
