@extends('navbar')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-2 ">
       @include('admin.usuario.secciones.sidebar2')
    </div>
    <div class="col-md-10 ">
      <div class="panel "  >
        <div class="panel-heading" style="font-size:18px">
        <b>Calibration Table</b>
        <hr/>
     
          <div class="row">
            <div class="col-md-12">
              {!! Form::model(Request::all(),['route'=>'administrador.calibration.index', 'method'=>'GET', 'class'=>'form-group','role'=>'search'])!!}
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
        
        <div class="panel-body" style="font-size:11px;">
          <table class="table table table-bordered ">
  						<tr>
             
                <th>Transaction</th>
                <th>SerialNumber</th>
  							<th>Date</th>
  							<th>Time</th>
                <th>VacumLevel</th>
                <th>TestTime</th>
                <th>Estacion</th>
                <th>ErrorNumber</th>
                <th>SwVersion</th>            
  						</tr>
  						@foreach($rows as $item)
  						<tr data-id="{{ $item->Transaction}}">
  			
  							<td >
                  {{$item->Transaction}}
                </td>
  							<td>{{$item->SerialNumber}}</td>
                <td>{{$item->Date}}</td>
   							<td>{{$item->Time}}</td>
                <td>{{$item->VacumLevel}}</td>
                <td>{{$item->TestTime}}</td>
                <td id="rowCalibration" data-id="{{ $item->Transaction}}">
                  <a  class="myeditable" href="#" id="_token" data-type="text" data-pk="1" data-name="_token"  data-original-title="Ingresa nombre" style="display:none">{{ csrf_token() }}</a>
                  <a style="color:black;" class="myeditable" href="#" id="nombre" data-type="text" data-pk="1" data-name="Estacion"  data-id="{{$item->Estacion}}"data-original-title="Ingresa estacion">  {{$item->Estacion}}</a>
                  <button data-id="{{ $item->Transaction}}"   type="button" class="btn btn-default  btn-xs"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                </td>
                <td  id="rowCalibration" data-id="{{ $item->Transaction}}">
                  <a  class="myeditable" href="#" id="_token" data-type="text" data-pk="1" data-name="_token"  data-original-title="Ingresa nombre" style="display:none">{{ csrf_token() }}</a>
                  <a style="color:black;" class="myeditable" href="#" id="nombre" data-type="text" data-pk="1" data-name="ErrorNumber"  data-id="{{$item->ErrorNumber}}"data-original-title="Ingresa nombre">  {{$item->ErrorNumber}}</a>
                  <button data-id="{{ $item->Transaction}}"   type="button" class="btn btn-default  btn-xs"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></td>
                <td id="rowCalibration" data-id="{{ $item->Transaction}}"> <a  class="myeditable" href="#" id="_token" data-type="text" data-pk="1" data-name="_token"  data-original-title="Ingresa nombre" style="display:none">{{ csrf_token() }}</a>
                  <a style="color:black;" class="myeditable" href="#" id="nombre" data-type="text" data-pk="1" data-name="SwVersion"  data-id="{{$item->SwVersion}}"data-original-title="Ingresa nombre">  {{$item->SwVersion}}</a>
                  <button data-id="{{ $item->Transaction}}"   type="button" class="btn btn-default  btn-xs"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></td>            
  						</tr>
  						@endforeach
					</table>
          {!!$rows->setPath('')->render()!!}
        </div>
      </div>
      
    </div>
  </div>
</div>

 <form class="form-horizontal" id="form-calibration" role="form" method="POST" action="{{ url('/send/calibration') }}">
</form>
@endsection