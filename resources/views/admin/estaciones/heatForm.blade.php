@extends('navbar')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-2 ">
       @include('admin.usuario.secciones.sidebar2')
    </div>
    <div class="col-md-10 ">
      <div class="panel " style="overflow-x:auto;" >
        <div class="panel-heading" style="font-size:18px">
        <b>Heat Form</b>
        <hr/>

     
          <div class="row">
            <div class="col-md-12">
              {!! Form::model(Request::all(),['route'=>'estaciones.heatForm.index', 'method'=>'GET', 'class'=>'form-group','role'=>'search'])!!}
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
                <th>SerialNumber</th>
                <th>Date</th>
                <th>Time</th>
                <th>E2Load</th>
  							<th>Estacion</th>
                <th>ErrorNumber</th>
                <th>E3PLow</th>
                <th>E3PHi</th>
                <th>E5Altura</th>
  						</tr>
  						@foreach($rows as $item)
  						<tr data-id="{{ $item->Transaction}}">
  							<td>{{$item->SerialNumber}}</td>
                <td>{{$item->Date}}</td>
                <td>{{$item->Time}}</td>
                <td>{{$item->E2Load}}</td>
                <td>{{$item->Estacion}}</td>
                <td>{{$item->ErrorNumber}}</td>   
                <td>{{$item->E3PLow}}</td>   
                <td>{{$item->E3PHi}}</td>   
                <td>{{$item->E5Altura}}</td>              
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