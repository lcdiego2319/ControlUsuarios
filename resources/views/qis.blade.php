@extends('app')
@section('content')
<style>
  		#feedback { font-size: 1.4em; }
  		#qis .ui-selecting { background: #FECA40; }
  		#qis .ui-selected { background: #F39814; color: white; }
  		#qis { list-style-type: none; margin: 0; padding: 0; width: 450px; }

  		#sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
  		#sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
  		#sortable li span { position: absolute; margin-left: -1.3em; }
  	</style>
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
			<div class="col-md-6 col-md-offset-3">
				<button type="button" id="btnEnableStorable" class="btn btn-warning">Activar Storable</button>
				<button type="button" id="btnEnableSelectable" class="btn btn-warning">Activar Selectable</button>
				<button type="button" id="btnNewRow" onClick="newRow()" class="btn btn-warning">Nuevo record</button>
				<button type="button" id="btnNewCol" onClick="newColumn()" class="btn btn-warning">Nueva columna</button>
				<button type="button" id="test" class="btn btn-warning">Eliminar record</button>
				<button type="button" id="btnDelCol" onClick="deleteColumn(this)" class="btn btn-warning">Eliminar columna</button>
			</div>
		</div>
			<div class="row ">
			<div class="col-md-6 col-md-offset-3">
				<table  id="qis" class="table table-bordered  table-hover">
					<tbody>
				<tr >
					<td id="tableModal">MEDICIONES</td>
					<td id="tableModal">Hora o Fecha</td>
					<td id="tableModal">Hora o Fecha</td>
					<td id="tableModal">Hora o Fecha</td>
					<td id="tableModal">Hora o Fecha</td>
					<td id="tableModal">Hora o Fecha</td>
					<td id="tableModal">PLAN DE REACCION</td>
				</tr>
					<tr>
					<td id="tableRowClick" class="item">1a. PIEZA:</td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item">Aqui debe de existir grandes cantidades de informacion. debe afrandarse la celda basstante.S</td>
					<td class="item"></td>
					<td  class="item" rowspan="5" width="200px">Si la primera pieza no cumple con las caracteristicas durante la verificaicon, avisa a tu supervisor.</td>		
				</tr>
				<tr>
					<td id="tableRowClick" class="item">CARACT:</td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>				
				</tr>
				<tr>
					<td  id="tableRowClick" class="item"> ESPEC:</td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>				
				</tr>
				<tr>
					<td class="item">METODO:</td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item" ></td>				
				</tr>
				<tr>
					<td id="tableRowClick" class="item">FREC:</td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>				
				</tr>
			</tbody>
				</table>
				<span>Seleccionaste:</span> <span id="select-result">ninguno</span>.
			</div>
		</div>
	</div>
	
	<div class="modal fade bs-example-modal-sm" id="tableColModal">
  		<div class="modal-dialog modal-sm">
    		<div class="modal-content" >
      			<div class="modal-header" >
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title">Añadir columna</h4>
      			</div>
      			
      			<div class="modal-footer">
      				<p id="index"><p>
        			<a class="btn btn-danger" id="btnLeftCol"  >Izquierda</a>
        			<a  class="btn btn-success" id="btnRightCol">Derecha</a>
        			<a  class="btn btn-success" id="btnDeleteCol">Eliminar</a>
      			</div>
    		</div><!-- /.modal-content -->
  		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

	<div class="modal fade bs-example-modal-sm" id="tableRowModal">
  		<div class="modal-dialog modal-sm">
    		<div class="modal-content" >
      			<div class="modal-header" >
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title">Añadir Fila</h4>
      			</div>
      			
      			<div class="modal-footer">
      				<p id="index"><p>
        			<a class="btn btn-danger" id="btnUpRow"  >Arriba</a>
        			<a  class="btn btn-success" id="btnDownRow">Abajo</a>
        			<a  class="btn btn-success" id="btnDeleteRow">Eliminar</a>
      			</div>
    		</div><!-- /.modal-content -->
  		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

</div>
@endsection