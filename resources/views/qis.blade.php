@extends('app')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<img src="{{ asset('/img/continental-logo3.png') }}"  width="350px" height="80px" alt="">
		</div>
		<div class="col-md-8">
		</div>
	</div>
<br/>
	<div class="row">	
		<div class="col-md-1" >
		</div>
		<div class="col-md-3" >
			<table class="table">
				<tr>
					<td>#PARTE:</td>
					<td> {!! Form::text('SerialNumber',null, ['class'=>'form-control','placeholder'=>'#Parte...']) !!}</td>
				</tr>
				<tr>
					<td>PRODUCTO:</td>
					<td> {!! Form::text('SerialNumber',null, ['class'=>'form-control','placeholder'=>'Producto...']) !!}</td>
				</tr>
				<tr>
					<td>MODELO:</td>
					<td> {!! Form::text('SerialNumber',null, ['class'=>'form-control','placeholder'=>'Modelo...']) !!}</td>
				</tr>
				<tr>
					<td>CLIENTE:</td>
					<td> {!! Form::text('SerialNumber',null, ['class'=>'form-control','placeholder'=>'Cliente...']) !!}</td>
				</tr>
			</table>
		</div>
	<button type="button" id="BtnAdd" clas="btn btn-primary">Anadir</button>
		<div class="col-md-4">
		</div>
				
		<div class="col-md-3">
			<table class="table ">
				<tr>
					<td>DATE CODE</td>
					<td> {!! Form::text('SerialNumber',null, ['class'=>'form-control','placeholder'=>'Date code...']) !!}</td>
				</tr>
				<tr>
					<td>TURNO</td>
					<td> {!! Form::text('SerialNumber',null, ['class'=>'form-control','placeholder'=>'Turno...']) !!}</td>
				</tr>
				<tr>
					<td>INSPECTOR:</td>
					<td> {!! Form::text('SerialNumber',null, ['class'=>'form-control','placeholder'=>' Inspector...']) !!}</td>
				</tr>
			</table>
		</div>
		<div class="col-md-1">
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<table style="border: 2px solid black;"  id="qis"class="table table-bordered">
			<tr style="border: 2px solid black;" >
				<th>MEDICIONES</th>
				<th >Hora o Fecha</th>
				<th>Hora o Fecha</th>
				<th>Hora o Fecha</th>
				<th>Hora o Fecha</th>
				<th>Hora o Fecha</th>
				<th >PLAN DE REACCION</th>
			</tr>
				<tr>
				<td>1a. PIEZA:</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td  style="border: 2px solid black;" rowspan="5" width="200px">Si la primera pieza no cumple con las caracteristicas durante la verificaicon, avisa a tu supervisor.</td>		
			</tr>
			<tr>
				<td>CARACT:</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>				
			</tr>
				<tr>
				<td>ESPEC:</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>				
			</tr>
			<tr>
				<td>METODO:</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>				
			</tr>
			<tr>
				<td>FREC:</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>				
			</tr>
			<tr style="border-top: 2px solid black;">
				<td >CARACT:</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td  style="border: 2px solid black;"   rowspan="35" width="200px"><br/><br/><br/><br/><br/><br/><br/><br/><br/>Si encuentras una caracteristica fuera de lo indicado durante la verificacion, avisa a tu supervisor y deten el producto como sospechoso hasta corroborar los datos.</td>
			</tr>
				<tr>
				<td>ESPEC:</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>METODO:</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>				
			</tr>
			<tr>
				<td>FREC:</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>				
			</tr>
			<tr style="border-top: 2px solid black;">
				<td>CARACT:</td>
				<td ></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>				
			</tr>
				<tr>
				<td>ESPEC:</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>				
			</tr>
			<tr>
				<td>METODO:</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>FREC:</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr style="border-top: 2px solid black;">
				<td>CARACT:</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>				
			</tr>
				<tr>
				<td>ESPEC:</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>				
			</tr>
			<tr>
				<td>METODO:</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>				
			</tr>
			<tr>
				<td>FREC:</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>				
			</tr>
			<tr style="border-top: 2px solid black;">
				<td>CARACT:</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>				
			</tr>
				<tr>
				<td>ESPEC:</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>				
			</tr>
			<tr>
				<td>METODO:</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>				
			</tr>
			<tr>
				<td>FREC:</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				
			</tr>
			<tr style="border-top: 2px solid black;">
				<td>CARACT:</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>				
			</tr>
				<tr>
				<td>ESPEC:</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				
			</tr>
			<tr>
				<td>METODO:</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>				
			</tr>
			<tr>
				<td>FREC:</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>				
			</tr>
			<tr style="border-top: 2px solid black;">
				<td>CARACT:</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>				
			</tr>
				<tr>
				<td>ESPEC:</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>				
			</tr>
			<tr>
				<td>METODO:</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>				
			</tr>
			<tr>
				<td>FREC:</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>				
			</tr>
			<tr style="border-top: 2px solid black;">
				<td>CARACT:</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>				
			</tr>
				<tr>
				<td>ESPEC:</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>				
			</tr>
			<tr>
				<td>METODO:</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>				
			</tr>
			<tr>
				<td>FREC:</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>				
			</tr>
			<tr style="border-top: 2px solid black;">
				<td>CARACT:</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>				
			</tr>
				<tr>
				<td>ESPEC:</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>				
			</tr>
			<tr>
				<td>METODO:</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>				
			</tr>
			<tr>
				<td>FREC:</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td><button type='button' id='BtnDelete' class='btn btn-primary'>Eliminar</button></td>				
			</tr>

		</table>
		</div>
	</div>

</div>
@endsection