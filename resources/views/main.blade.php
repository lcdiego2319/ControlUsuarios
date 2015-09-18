@extends('navbar')

@section('content')
<div class="container-fluid" style="background-color:#E6E6E6">
	<div class="row">
    <div class="col-md-2">
      @include('admin.usuario.secciones.sidebar2')
    </div>
		
    <div class="col-md-10" >
      <br/> <br/>
      <div class="row">
        <div class="col-md-12">
          {!! Form::model(Request::all(),['route'=>'estaciones.buscador.index', 'method'=>'GET', 'class'=>'form-group','role'=>'search'])!!}
            <div class="row">
                <div class="col-md-12" style="text-align:center; font-size:20px;">
                	<b>Seleccionar la estacion y el numero de parte que deseas buscar               </b> </div>
            </div>
            <br/>
            <div class="row">
              <div class="col-md-2">
              </div>
              
              <div class="col-md-5">
                <div class="form-group">
                  {!! Form::text('SerialNumber',null, ['class'=>'form-control input-lg','placeholder'=>'Numero de serie...']) !!}
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                   {!! Form::select('estacion',config('estaciones.types'),null, ['class' => 'form-control input-lg']) !!}
                </div>
              </div>
              
              
              <div class="col-md-2">
             
              </div>
            </div>
            <br/>
            <div class="row">
              <div class="col-md-4 col-md-offset-4"> <button type="submit" class="btn btn-warning btn-lg btn-block">Buscar</button></div>
            </div>
              
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
</div>



@endsection


