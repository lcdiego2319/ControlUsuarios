@extends('navbar')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-2 ">
       @include('admin.usuario.secciones.sidebar2')
    </div>
    <div class="col-md-10 ">
        <div class="panel-heading" style="font-size:18px;">
      <div class="panel " >
        <b>Body Status Table</b>
        <hr/>
          <div class="row">
            
            <div class="col-md-12">
              {!! Form::model(Request::all(),['route'=>'estaciones.bodystatus.index', 'method'=>'GET', 'class'=>'form-group','role'=>'search'])!!}
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
        <div class="panel-body"  style="overflow-x:auto; font-size:11px;">
          <table class="table table table-bordered ">
  						<tr>
             
                <th>SerialNumber</th>
  							<th>FrictionAssemblyDialStatus</th>
  							<th>HeatFormDialStatus</th>
                <th>CoverAssemblyStatus</th>
                <th>PlugAssemblyManualStatus</th>
                <th>LaserEngraverStatus</th>
                <th>LabelPrinterStatus</th>
                <th>SerialNumberCover</th>
                <th>CalibracionStatus</th>
                <th>FinalTestStation1Status</th>
                <th>FinalTestStation2Status</th>
                <th>FinalTestStation3Status</th>
                <th>FinalTestStation4Status</th>
                <th>Date............</th>
                <th>FinalTestStation4bStatus</th>
  						</tr>
  						@foreach($rows as $item)
  						<tr >
  						
  							<td>{{$item->SerialNumber}}</td>
  							<td>{{$item->FrictionAssemblyDialStatus}}</td>
                <td>{{$item->HeatFormDialStatus}}</td>
   							<td>{{$item->CoverAssemblyStatus}}</td>
                <td>{{$item->PlugAssemblyManualStatus}}</td>
                <td>{{$item->LaserEngraverStatus}}</td>
                <td>{{$item->LabelPrinterStatus}}</td>
                <td>{{$item->SerialNumberCover}}</td>
                <td>{{$item->CalibracionStatus}}</td>
                <td>{{$item->FinalTestStation1Status}}</td>
                <td>{{$item->FinalTestStation2Status}}</td>
                <td>{{$item->FinalTestStation3Status}}</td>
                <td>{{$item->FinalTestStation4aStatus}}</td>
                <td>{{$item->Date}}</td>
                <td>{{$item->FinalTestStation4bStatus}}</td>

  						</tr>
  						@endforeach
					</table>
        </div>
      </div>
      

          {!!$rows->setPath('')->render()!!}
    </div>
  </div>
  <footer style="background-color:#FFBF00;border-bottom:5px solid #222; text-align:center; color:black;">
  <p>Quality Software 2015 Continental</p>
</footer>
</div>
@endsection