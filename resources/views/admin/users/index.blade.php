@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Usuarios</div>

				<div class="panel-body">
					<p>
						<a class="btn btn-info" href="{{ route('admin.users.create') }}" role="button">Crear Usuario</a>
					</p>
					<p>Hay {{$users->total()}} usuarios</p>
					<table class="table table-striped">
  						<tr>
  							<td>#</td>
  							<td>Nombre</td>
  							<td>Email</td>
  							<td>Acciones</td>
  						</tr>
  						@foreach($users as $user)
  						<tr>
  							<td>{{$user->id}}</td>
  							<td>{{$user->name}}</td>
  							<td>{{$user->email}}</td>
   							<td>
  								<a href="{{ route('admin.users.edit',$user) }}">Editar</a>
  								<a href="">Eliminar</a>
  							</td>
  						</tr>
  						@endforeach

					</table>
					{!!$users->render()!!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
