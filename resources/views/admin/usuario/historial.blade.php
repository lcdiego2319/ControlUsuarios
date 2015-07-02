@extends('navbar')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-2 ">
       @include('admin.usuario.secciones.sidebar2')
    </div>
    <div class="col-md-10 ">
      <div class="panel" >
        <div class="panel-heading" style="font-size:18px">
          <b>Registros</b>
        <hr/>
        <div class="row">
            <div class="col-md-12">
              {!! Form::model(Request::all(),['route'=>'administrador.historial.index', 'method'=>'GET', 'class'=>'form-group','role'=>'search'])!!}
              <div class="row">
                 <div class="col-md-1">
                 
                </div>
                <div class="col-md-6">
                  {!! Form::text('usuario',null, ['class'=>'form-control','placeholder'=>'Numero de empleado...']) !!}
                </div>
                
                <div class="col-md-2">
                  <button type="submit" class="btn btn-warning">Buscar</button>
                </div>
                
                <div class="col-md-3">
                  <p>Hay {{$historial->total()}} registros</p>
               </div>
              {!! Form::close() !!}
              </div>
            </div>
          </div>
          
        </div>
        <div class="panel-body" style="font-size:11px; overflow-x:auto">
          <table class="table table table-bordered ">
  						<tr>
                
                <th>Usuario</th>
                <th>Tabla</th>
                <th>Valor anterior</th>
  							<th>Nuevo valor</th>
  							<th>Campo</th>
                <th>Fecha</th>
                            
  						</tr>
  						@foreach($historial as $item)
  						<tr>
  				
  							<td>{{$item->usuario}}</td>
                <td>{{$item->tabla}}</td>
                <td>{{$item->anterior}}</td>
   							<td>{{$item->nuevo}}</td>
                <td>{{$item->campo}}</td>
                <td>{{$item->updated_at}}</td>
                 
  						</tr>
  						@endforeach
					</table>
        {!!$historial->setPath('')->render()!!}
        </div>
      </div>
      

    
    </div>
  </div>
</div>

 
@endsection