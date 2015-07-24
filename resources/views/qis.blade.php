@extends('app')
@section('content')
<style>
  		#feedback { font-size: 1.4em; }
  		#qis .ui-selecting { background: #FECA40; }
  		#qis .ui-selected { background: #F5DA81; color: white; }

  	
  	</style>
<div class="container-fluid">
	<div class="row" style="background-color:white;border-bottom: solid black;border-bottom-width: 1px;">
		<div class="col-md-4">
			<img src="{{ asset('/img/continental-logo3.png') }}"  width="350px" height="110px" alt="">
		</div>
		<div class="col-md-2">
		</div>
		<div class="col-md-3">
			<br/><br/>
			<span style="font-size:20px;"><b>QIS CALIDAD</b></span>
		</div>
		<div class="col-md-3" style="font-size:15px; text-align:right;">
			<br/><br/>
			<span >Fecha: 07/23/2015..</span>
		</div>
	</div>
<br/>
<div class="panel panel-default" style="box-shadow: 5px 5px 5px #888888;">

  <div class="panel-body">


	<div class="row">	
		<div class="col-md-1" >
		</div>
		<div class="col-md-3" >
			<table class="table" >
				<tr>
					<td style="border:none">#PARTE:</td>
					<td style="border:none"> {!! Form::text('SerialNumber',null, ['class'=>'form-control','placeholder'=>'#Parte...']) !!}</td>
				</tr>
				<tr>
					<td style="border:none">PRODUCTO:</td>
					<td style="border:none"> {!! Form::text('SerialNumber',null, ['class'=>'form-control','placeholder'=>'Producto...']) !!}</td>
				</tr>
				<tr>
					<td style="border:none">MODELO:</td>
					<td style="border:none"> {!! Form::text('SerialNumber',null, ['class'=>'form-control','placeholder'=>'Modelo...']) !!}</td>
				</tr>
				<tr>
					<td style="border:none">CLIENTE:</td>
					<td style="border:none"> {!! Form::text('SerialNumber',null, ['class'=>'form-control','placeholder'=>'Cliente...']) !!}</td>
				</tr>
			</table>
		</div>
	
		<div class="col-md-4">
		</div>
				
		<div class="col-md-3">
			<table class="table ">
				<tr>
					<td style="border:none">DATE CODE</td>
					<td style="border:none"> {!! Form::text('SerialNumber',null, ['class'=>'form-control','placeholder'=>'Date code...']) !!}</td>
				</tr>
				<tr>
					<td style="border:none">TURNO</td>
					<td style="border:none"> {!! Form::text('SerialNumber',null, ['class'=>'form-control','placeholder'=>'Turno...']) !!}</td>
				</tr>
				<tr>
					<td style="border:none">INSPECTOR:</td>
					<td style="border:none"> {!! Form::text('SerialNumber',null, ['class'=>'form-control','placeholder'=>' Inspector...']) !!}</td>
				</tr>
			</table>
		</div>
		<div class="col-md-1">
		</div>
	</div>
	  </div>
</div>
	<hr/>
	<div class="panel panel-default" style="box-shadow: 5px 5px 5px #888888;">

  <div class="panel-body">

		<div class="row">
			<div class="col-md-1">
			</div>
			<div class="col-md-8">
				<button type="button" id="btnEnableStorable" class="btn btn-success btn-xs">Activar Storable</button>
				<button type="button" id="btnEnableSelectable" class="btn btn-danger btn-xs">Activar Selectable</button>
			</div>
			<div class="col-md-3">
				<button type="button" id="btnNewRow" onClick="newRow()" class="btn btn-default btn-xs" > <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Fila</button>
				<button type="button" id="test" onClick="deleteLastRow()" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span> Fila</button>
				<button type="button" id="btnNewCol" onClick="newColumn()" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Col</button>
				<button type="button" id="btnDelCol" onClick="deleteLastColumn()" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span> Col</button>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="table-responsive">
				<table  id="qis" class="table table-bordered  table-hover">
					<tbody>
				<tr >
					<th class="warning" id="tableModal">MEDICIONES</th>
					<th class="warning" id="tableModal">Hora o Fecha</th>
					<th class="warning" id="tableModal">Hora o Fecha</th>
					<th class="warning" id="tableModal">Hora o Fecha</th>
					<th class="warning" id="tableModal">Hora o Fecha</th>
					<th class="warning" id="tableModal">Hora o Fecha</th>
					<th class="warning" id="tableModal">PLAN DE REACCION</th>
				</tr>
					<tr>
					<td class="warning" id="tableRowClick" class="item">1a. PIEZA:</td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
				</tr>
				<tr>
					<td class="warning" id="tableRowClick" class="item">CARACT:</td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>				
				</tr>
				<tr>
					<td  class="warning" id="tableRowClick" class="item"> ESPEC:</td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>				
				</tr>
				<tr>
					<td class="warning" id="tableRowClick" class="item">METODO:</td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item" ></td>
					<td class="item"></td>				
				</tr>
				<tr>
					<td class="warning" id="tableRowClick" class="item">FREC:</td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>				
				</tr>

					<tr>
					<td class="warning" id="tableRowClick" class="item">1a. PIEZA:</td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					
				</tr>
				<tr>
					<td class="warning" id="tableRowClick" class="item">CARACT:</td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>				
				</tr>
				<tr>
					<td  class="warning" id="tableRowClick" class="item"> ESPEC:</td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>				
				</tr>
				<tr>
					<td class="warning" class="item">METODO:</td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item" ></td>
					<td class="item"></td>				
				</tr>
				<tr>
					<td  class="warning" id="tableRowClick" class="item">FREC:</td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>				
				</tr>
				<tr>
					<td class="warning" id="tableRowClick" class="item">1a. PIEZA:</td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					
				</tr>
				<tr>
					<td class="warning" id="tableRowClick" class="item">CARACT:</td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>				
				</tr>
				<tr>
					<td  class="warning" id="tableRowClick" class="item"> ESPEC:</td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>				
				</tr>
				<tr>
					<td class="warning" id="tableRowClick" class="item">METODO:</td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item" ></td>
					<td class="item"></td>				
				</tr>
				<tr>
					<td  class="warning" id="tableRowClick" class="item">FREC:</td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>				
					<td class="item"></td>	
				</tr>
				<tr>
					<td class="warning" id="tableRowClick" class="item">1a. PIEZA:</td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					
				</tr>
				<tr>
					<td class="warning" id="tableRowClick" class="item">CARACT:</td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>				
				</tr>
				<tr>
					<td  class="warning" id="tableRowClick" class="item"> ESPEC:</td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>				
				</tr>
				<tr>
					<td class="warning" id="tableRowClick" class="item">METODO:</td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item" ></td>
					<td class="item"></td>				
				</tr>
				<tr>
					<td  class="warning" id="tableRowClick" class="item">FREC:</td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>
					<td class="item"></td>				
				</tr>
			</tbody>
				</table>
				<!--<span>Seleccionaste:</span> <span id="select-result">ninguno</span>.-->
			</div>
			</div>
		</div>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<b>NOTAS:</b>
			<textarea class="form-control" rows="5"></textarea>
		</div>
	</div>
	
	<br/>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<button type="button" class="btn btn-warning btn-block">Guardar plantilla</button>
		</div>
	</div>
	<br/>
	</div>
</div>
		<div class="modal fade bs-example-modal-sm" id="tableColModal">
  		<div class="modal-dialog modal-sm">
    		<div class="modal-content" >
      			<div class="modal-header" style="background-color:#FFBF00">
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title">Edicion de Columnas</h4>
      			</div>
      			
      			<div class="modal-footer">
      				<p id="index"></p>
      				<div class="row">
      					<div class="col-md-10 col-md-offset-1">
        					<a class="btn btn-success" id="btnLeftCol"  ><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>Izq</a>
        					<a  class="btn btn-danger" id="btnDeleteCol"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Eliminar</a>
        					<a  class="btn btn-success" id="btnRightCol"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>Der</a>
        				</div>
        			</div>
      			</div>
    		</div><!-- /.modal-content -->
  		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

	<div class="modal fade bs-example-modal-sm" id="tableRowModal">
  		<div class="modal-dialog modal-sm">
    		<div class="modal-content" >
      			<div class="modal-header" style="background-color:#FFBF00">
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title">Edicion de filas</h4>
      			</div>
      				<dKiv class="modal-footer">
      				<p id="index"></p>
      				<div class="row">
      					<div class="col-md-10 col-md-offset-1">
        					<a class="btn btn-default" id="btnUpRow"  ><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span></a>
        					<a  class="btn btn-danger" id="btnDeleteRow"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Eliminar</a>
        					<a  class="btn btn-default" id="btnDownRow"><span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span></a>
        				</div>
        			</div>
      			</div>
      		</div><!-- /.modal-content -->
  		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

</div>
<br/>
<footer style="background-color:white;border-top: solid black;border-top-width: 1px;font-size:15px; text-align:center;padding:5px;">
	Continental QIS ELectronic 2015
	</footer>
	</div>
@endsection