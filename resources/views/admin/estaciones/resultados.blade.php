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
          @if(Session::has('message'))
            <p class="alert alert-warning">{{ Session::get('message') }}</p>
          @endif



        <div class="panel-body" style="font-size:11px;">
          <table class="table table table-bordered ">
  						<tr>
             
                <th>Transaction</th>
                <th>SerialNumber</th>
  							<th>Date</th>
  							<th>Time</th>
                <th>Result1</th>
                <th>Result2</th>
                <th>Estacion</th>
                <th>ErrorNumber</th>
                
  						</tr>
  						@foreach($calibration as $item)
  						<tr>
  			
  							<td >
                  {{$item->Transaction}}
                </td>
  							<td>{{$item->SerialNumber}}</td>
                <td>{{$item->Date}}</td>
   							<td>{{$item->Time}}</td>
                <td>{{$item->Result1}}</td>
                <td>{{$item->Result2}}</td>
                <td> {{$item->Estacion}}</td>
                <td> {{$item->ErrorNumber}}</td>
                
  						</tr>
  						@endforeach
					</table>
          {!!$cantilever->setPath('')->render()!!}
        </div>
      </div>
      
    </div>
  </div>
  @include('admin.usuario.secciones.login');
</div>


@endsection