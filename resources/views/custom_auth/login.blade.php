@extends('navbar')

@section('content')
<div class="container-fluid">
	<br/><br/><br/>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-warning">
				<div class="panel-heading" style="font-size:18px">Acceso</div>
				<div class="panel-body">

					@include('admin.usuario.secciones.errores')
					

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/custom_auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Usuario</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="usuario" placefolder="Ingresa tu usuario..."value="{{ old('usuario') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Contraseña</label>
							<div class="col-md-6">
								<input type="password" class="form-control" placefolder="Ingresa tu contraseña..." name="password">
							</div>
						</div>

				

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-warning btn-block">Ingresar</button>

								<a class="btn btn-link" href="{{ url('/createSuperuser') }}">Solo personal autorizado.</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
