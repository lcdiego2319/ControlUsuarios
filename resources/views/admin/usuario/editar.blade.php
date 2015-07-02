@extends('navbar')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-warning">
        
				<div class="panel-heading" style="font-size:18px">Editar Usuario: {{ $usuario->nombre }}</div>
 @if(Session::has('message'))
          <p class="alert alert-success">{{ Session::get('message') }}</p>
          @endif
				<div class="panel-body">
					@include('admin.usuario.secciones.validacion')
					{!!Form::model($usuario, ['route' => ['administrador.usuarios.update',$usuario],'method' => 'PUT'])!!}
          
           	 @include('admin.usuario.secciones.forms')

           	<div class="row">
            	<div class="col-md-4">
                </div>
            	<div class="col-md-4" style="text-align:center;">
              		 <button type="submit" class="btn btn-warning btn-block">Guardar cambios</button>
	            </div>
          
              	<div class="col-md-4">
                </div>
          </div>



             
          {!!Form::close()!!}
              <div class="row">
              <div class="col-md-4">
                </div>
              <div class="col-md-4" style="text-align:center;">
                   @include('admin.usuario.secciones.eliminar')
              </div>
          
                <div class="col-md-4">
                </div>
          </div>
 
				
        
				</div>
			</div>

		</div>

	</div>
</div>
@endsection
