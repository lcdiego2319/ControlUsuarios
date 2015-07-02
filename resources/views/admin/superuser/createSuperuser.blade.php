@extends('navbar')

@section('content')
<div class="container">
	<br/><br/><br/><br/>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-warning">
				<div class="panel-heading" style="font-size:18px" >Crear super-usuario</div>
				<div class="panel-body">
					@include('admin.usuario.secciones.validacion')
					{!!Form::open(['route' => 'storeSuperuser','method' => 'POST'])!!}
            			  <div class="form-group">
						    {!! Form::label('nombre','Nombre') !!}
						    {!! Form::text('nombre',null, ['class' => 'form-control','placeholder' => 'Ingresar su nombre...']) !!}
						  </div>

						  <div class="form-group">
						    {!! Form::label('usuario','Usuario') !!}
						    {!! Form::text('usuario',null, ['class' => 'form-control','placeholder' => 'Ingresar nombre de usuario...']) !!}
						  </div>
						  
						  <div class="form-group">
						    {!! Form::label('password','Contraseña') !!}
						    {!! Form::password('password',['class' => 'form-control','placeholder' => 'Ingresar contraseña...']) !!}
						  </div>
						              
						  <div class="form-group">
						    {!! Form::label('puesto','Puesto') !!}
						    {!! Form::text('puesto',null, ['class' => 'form-control','placeholder' => 'Ingresar puesto...']) !!}
						  </div>

						    <div class="form-group">
						    {!! Form::label('tipo','Puesto') !!}
						    {!! Form::text('tipo','superusuario', ['class' => 'form-control','readonly']) !!}
						  </div>
  
              			<div class="row">
            				<div class="col-md-3"></div>
            				<div class="col-md-6" style="text-align:center;">
              					<button type="submit" class="btn btn-warning btn-block">Crear Super-usuario</button>
              					
            				</div>
            				<div class="col-md-3">
            				</div>
          				</div>
          			{!!Form::close()!!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
