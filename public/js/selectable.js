$(document).ready(function(){
	 /*FUNCTION: Para activar la funcion storable que permite el movimiendo de rows en la tabla, 
	 no es posible utilizarlo sin desactivar la funcion selectable.*/
	  $('.myeditable').editable();
$('tbody').sortable();
	$('#btnEnableStorable').on("click",function(e){
		$('#btnEnableStorable').css("background-color","#5cb85c");
		$("#btnEnableSelectable").css("background-color","#d9534f");

		$('tbody').sortable("enable");
	 	$("#qis").selectable("disable");
	});

	$("#btnEnableSelectable").on("click",function(e){
		$('#btnEnableStorable').css("background-color","#d9534f");
		$("#btnEnableSelectable").css("background-color","#5cb85c");
		$('tbody').sortable("disable");
	 	$("#qis").selectable("enable");
	});


	$( "#qis" ).selectable({  //Permitir que se puedan seleccionar las celdads de la tabla.
		filter:".item" 
  	});

/*FUNCION: Para combinar las celdas que el usuario seleccione ya sea verticalmente u horizontalmente*/
	$( "#qis" ).on( "selectablestop", function( event, ui ) 
  	{
  		var result = $( "#select-result" ).empty();
		
		$( ".ui-selected", this ).each(function() {
    		result.append( $(this).html() );
  		});
		
		var rowNum = $('.ui-selected').first().parent().index();
		var rowNum2 = $('.ui-selected').last().parent().index();
		span = $('.ui-selected').length;
 		lastSpan = $('.ui-selected').first().attr('colspan');

		if(rowNum == rowNum2)	//revisar si la seleccion del usuario es horizontal o vertical
		{
			span = $('.ui-selected').length;
 			lastSpan = $('.ui-selected').first().attr('colspan');
		
			if(lastSpan)//Si la celda seleccionada ya cuenta con el atributo colspan, sumarle el numero de celdas que se quieren añadir
			{
				var sum = parseInt(span,10) + parseInt(lastSpan,10);
				$('.ui-selected').first().attr('colspan',sum-1);
				$('.ui-selected:gt(0)').remove();//eliminar el resto de la celdas, con el  fin de expandir la primera celda seleccionada
			}
			else//Si la celda seleccionada no cuenta con el atributo colspan unicamente añadir el numero de celdas que se deseen.
			{			
				$('.ui-selected').first().attr('colspan',span);
				$('.ui-selected:gt(0)').remove();
			}
		}
		else
		{
			span = $('.ui-selected').length;
 			lastSpan = $('.ui-selected').first().attr('rowspan');
			
			if(lastSpan)
			{
				var sum = parseInt(span,10) + parseInt(lastSpan,10);
				$('.ui-selected').first().attr('rowspan',sum-1);
				$('.ui-selected:gt(0)').remove();	
			}
			else
			{			
				$('.ui-selected').first().attr('rowspan',span);
				$('.ui-selected:gt(0)').remove();
			}
		}//end else
	});
/*FUNCION: Para abrir un model el cual permite añadir al usuario nuevas columnas*/
	$(document).on("dblclick","#tableModal",function(){

		var indice = $(this).index();
		
		$("#btnLeftCol").attr("onclick","appendColumnLast("+indice+")");//La funcion que se le añade al boton, se encuentra en el archivo qis.js en javascript vanilla.
		$("#btnRightCol").attr("onclick","appendColumnNext("+indice+")");
		$("#btnDeleteCol").attr("onclick","deleteColumn("+indice+")");
		$('#tableColModal').modal('show');
	});

	$(document).on("dblclick","#tableRowClick",function(){
		var indice = $(this).parents().index();//seleccionar el tr para conocer la ubicacion de la fila seleccionada por el usuario.
		$("#btnUpRow").attr("onclick","appendUpRow("+indice+")");	
		$("#btnDownRow").attr("onclick","appendDownRow("+indice+")");
		$("#btnDeleteRow").attr("onclick","deleteRow("+indice+")");	
		$('#tableRowModal').modal('show');

	});




});