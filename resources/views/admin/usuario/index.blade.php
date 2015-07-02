@extends('navbar')

@section('content')
<div class="container-fluid">
	<div class="row">
        <div class="col-md-2">
          @include('admin.usuario.secciones.sidebar2')
     </div>
		<div class="col-md-10">
		<div class="panel " >
        <div class="panel-heading" style="font-size:18px;">
			<b>Control de Usuarios</b>
        <hr/>
      </div>
          <div class="row">
              <div class="col-md-8">
            {!! Form::model(Request::all(),['route'=>'administrador.usuarios.index', 'method'=>'GET', 'class'=>'navbar-form navbar-left','role'=>'search'])!!}
              <div class="form-group">
            {!! Form::text('nombre',null, ['class'=>'form-control','placeholder'=>'Nombre de usuario']) !!}
            {!! Form::select('tipo',config('options.types'),null,['class'=>'form-control']) !!}
          </div>
          <button type="submit" class="btn btn-default">Buscar</button>
        {!! Form::close() !!}
      </div>
      <div class="col-md-4">
         <p>Hay {{$usuarios->total()}} usuarios</p>
      </div>
					</div>
			<hr/>
      <div class="panel-body"  style="overflow-x:auto; font-size:13px;">
					<table class="table table-striped">
  						<tr>
  						
                <th>Nombre</th>
  							<th>Usuario</th>
  							<th>puesto</th>
                <th>Rol</th>
                <th>Fecha de creacion</th>
                <th>Acciones</th>
  						</tr>
  						@foreach($usuarios as $usuario)
  						<tr data-id="{{ $usuario->id}}">
  						
  							<td id="row" data-id="{{ $usuario->id}}">
                  <a  class="myeditable" href="#" id="_token" data-type="text" data-pk="1" data-name="_token"  data-original-title="Ingresa nombre" style="display:none">{{ csrf_token() }}</a>
                  <a style="color:black;" class="myeditable" href="#" id="nombre" data-type="text" data-pk="1" data-name="nombre"  data-id="{{$usuario->nombre}}"data-original-title="Ingresa nombre">{{$usuario->nombre}}</a>
                  <button data-id="{{ $usuario->id}}"   type="button" class="btn btn-default  btn-xs"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                </td>
  
  							<td id="row" data-id="{{ $usuario->id}}">
                  <a  class="myeditable" href="#" id="_token" data-type="text" data-pk="1" data-name="_token"  data-original-title="Ingresa usuario" style="display:none">{{ csrf_token() }}</a>
                  <a  style="color:black;" class="myeditable" href="#" id="nombre" data-type="text" data-pk="1" data-name="usuario"  data-id="{{$usuario->usuario}}"data-original-title="Ingresa usuario">{{$usuario->usuario}}</a>
                  <button data-id="{{ $usuario->id}}"   type="button" class="btn btn-default  btn-xs"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                </td>

                <td  id="row" data-id="{{ $usuario->id}}">
                   <a  class="myeditable" href="#" id="_token" data-type="text" data-pk="1" data-name="_token"  data-original-title="Ingresa puesto" style="display:none">{{ csrf_token() }}</a>
                  <a  style="color:black;" class="myeditable" href="#" id="nombre" data-type="text" data-pk="1" data-name="puesto"  data-id="{{$usuario->puesto}}"data-original-title="Ingresa puesto">{{$usuario->puesto}}</a>
                  <button data-id="{{ $usuario->id}}"   type="button" class="btn btn-default  btn-xs">
              <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                  </td>
   							 <td>{{$usuario->tipo}}</td>
                <td>{{$usuario->created_at}}</td>
                <td>
                  <a class="btn btn-primary btn-xs"  href="{{ route('administrador.usuarios.edit',$usuario) }}"><span class="glyphicon glyphicon-pencil"  aria-hidden="true"></span>Editar</a>
                  <button type="button" class="btn-delete btn btn-danger btn-xs"  data-id="{{ $usuario->id}}"  href="" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Eliminar</button>
                </td>
  						</tr>
  						@endforeach
					</table>
        </div>
          <div class="row">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4" style="text-align:center;">
              <a class="btn btn-warning btn-block" href="{{ route('administrador.usuarios.create') }}" role="button">Crear Usuario</a>
            </div>
            <div class="col-md-4"></div>
 
					{!!$usuarios->render()!!}
				</div>
			</div>
		</div>
	</div>
</div>

{!!Form::open(['route' => ['administrador.usuarios.destroy',':USER_ID'],'method' => 'DELETE', 'id'=>'form-detele'])!!}
{!!Form::close()!!}

 <form class="form-horizontal" id="form-update" role="form" method="POST" action="{{ url('/send/fields') }}">
</form>
@endsection


