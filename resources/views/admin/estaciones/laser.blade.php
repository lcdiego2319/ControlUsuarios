@extends('navbar')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-2 ">
       @include('admin.usuario.secciones.sidebar2')
    </div>
    <div class="col-md-10 ">
      <div class="panel">
        <div class="panel-heading" style="font-size:18px">
           <b>Laser</b>
        <hr/>

     
          <div class="row">
            <div class="col-md-12">
              {!! Form::model(Request::all(),['route'=>'estaciones.laser.index', 'method'=>'GET', 'class'=>'form-group','role'=>'search'])!!}
              <div class="row">
                 <div class="col-md-1">
                 
                </div>
                <div class="col-md-6">
                  {!! Form::text('SerialNumber',null, ['class'=>'form-control','placeholder'=>'Numero de serie...']) !!}
                </div>
                
                <div class="col-md-2">
                  <button type="submit" class="btn btn-warning">Buscar</button>
                </div>
                
                <div class="col-md-3">
                  <p>Hay {{$rows->total()}} registros</p>
               </div>
              {!! Form::close() !!}
              </div>
            </div>
          </div>
        </div>  

        <div class="panel-body" style="font-size:11px; overflow-x:auto;">
          <table class="table table table-bordered ">
  						<tr>
                <th>SerialNumber</th>
                <th>Date</th>
                <th>Time</th>
                <th>Result1</th>
  							<th>Result2</th>
                <th>ErrorNumber</th>
                <th>Acciones</th>
  						</tr>
  						@foreach($rows as $item)
  						<tr data-id="{{ $item->Transaction}}">
  							<td>{{$item->SerialNumber}}</td>
                <td>{{$item->Date}}</td>
                <td>{{$item->Time}}</td>
                <td>{{$item->Result1}}</td>
                <td>{{$item->Result2}}</td>
                <td>{{$item->ErrorNumber}}</td>   
                 <td>
                  <button type="button" class="btn-alert btn btn-danger btn-xs"  data-id="{{  $item->Transaction}}"  href ="" ><span  class="glyphicon glyphicon-trash" aria-hidden="true"></span>Eliminar
                  </button>
                </td>           
  						</tr>
  						@endforeach
					</table>
          {!!$rows->setPath('')->render()!!}
        </div>
      </div>
       <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Eliminar registro</h4>
      </div>
      <div class="modal-body">
        Estas seguro que deseas eliminar el registro: <span id="SerialNumber" ></span>?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        <button type="button" class="btn-eliminar btn btn-primary">Si</button>
      </div>
    </div>
  </div>
</div>
    </div>
  </div>
</div>
{!!Form::open(['route' => ['estaciones.laser.destroy',':SERIAL_ID'],'method' => 'DELETE', 'id'=>'form-eliminar'])!!}
{!!Form::close()!!}

@endsection