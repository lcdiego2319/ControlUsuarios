@extends('navbar')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-2 ">
       @include('admin.usuario.secciones.sidebar2')
    </div>
    <div class="col-md-10 ">
      <div class="panel " >
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

        <div class="panel-body" style="font-size:11px; overflow-x:auto;">
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
  			
  							<td>{{$item->Transaction}}</td>
  							<td>{{$item->SerialNumber}}</td>
                <td>{{$item->Date}}</td>
   							<td>{{$item->Time}}</td>
                <td>{{$item->VacumLevel}}</td>
                <td>{{$item->TestTime}}</td>
                <td>{{$item->Estacion}}</td>
                <td>{{$item->ErrorNumber}}</td>
                <td>{{$item->SwVersion}}</td>            
  						</tr>
  						@endforeach
					</table>
          {!!$rows->setPath('')->render()!!}
        </div>
      </div>
      
    </div>
  </div>
</div>

 
@endsection