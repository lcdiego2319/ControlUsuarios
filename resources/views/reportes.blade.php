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
				 @if(Session::has('message'))
          <p class="alert alert-success">{{ Session::get('message') }}</p>
          @endif
				<div class="col-md-10 col-md-offset-1">
					 <div class="panel panel-default"  >
           
               <div class="panel-body">
					{!! Form::open(array('route'=>'estaciones.reports.store','class'=>'form','method'=>'POST')) !!}
						<div class="row">
							<div class="col-md-12" style="text-align:center; font-size:20px;">
									<b>Seleccionar la linea               </b> 
							</div>
						</div>
						<br/>
						
						<div class="row">
							<div class="col-md-3">
							</div>

							<div class="col-md-6">
								<div class="form-group">
									 {!! Form::select('estacion',config('estaciones.types'),null, ['class' => 'form-control input-lg']) !!}
								</div>
							</div>
							
							<div class="col-md-3">
							</div>
						</div>

						<div class="row">
							<div class="col-md-2">
							</div>
							
							<div class="col-md-8">
								 <table class="table">
									<tr>
										<td><b>De:</b></td>
										<td>{!! Form::input('date','inicio',null, ['class' => 'form-control', 'placeholder' => 'Time']) !!}</td>
										 <td><b>A:</b></td>
										<td> {!! Form::input('date','fin',null, ['class' => 'form-control', 'placeholder' => 'Time']) !!}</td>
										<td><b>Archivo:</b></td>
										<td >{!! Form::input('text','filename', $fecha, ['class' => 'form-control', 'placeholder' => 'Nombre del archivo']) !!}</td>
									</tr>
								 </table>
							</div>
							
							<div class="col-md-2">
							</div>
						</div>
						<br/>
						<div class="row">
							<div class="col-md-4 col-md-offset-4"> <button type="submit" class="btn btn-warning btn-lg btn-block">Generar Reporte</button></div>
						</div>
							
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
	</div>
</div>
</div>



@endsection


