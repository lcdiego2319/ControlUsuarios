@extends('navbar')

@section('content')
<div class="container">
	<br/><br/>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-warning">
        
				<div class="panel-heading" style="font-size:18px">Cambiar contraseña</div>
 					@if(Session::has('message'))
          				<p class="alert alert-success">{{ Session::get('message') }}</p>
         			 @endif
				<div class="panel-body">
					@include('admin.usuario.secciones.validacion')
				{!!Form::open(['route' => 'resetPassword','method' => 'POST'])!!}
          		<div class="form-group">
    				{!! Form::label('password','Nueva contraseña') !!}
   					{!! Form::password('password',['class' => 'form-control','placeholder' => 'Ingresar tu nueva contraseña...']) !!}
  				</div>

				  <div class="form-group">
				  
				    {!! Form::password('password_confirmation',['class' => 'form-control','placeholder' => 'Ingresar de nuevo la contraseña...']) !!}		
				  </div>

           	<div class="row">
            	<div class="col-md-4">
                </div>
            	<div class="col-md-4" style="text-align:center;">
              		 <button type="submit" class="btn btn-warning btn-block">Cambiar</button>
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
