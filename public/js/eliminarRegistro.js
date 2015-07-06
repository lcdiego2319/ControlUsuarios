$(document).ready(function(){
	$('.btn-alert').click(function(e){
var atr = $(this).attr('data-id');
		$('.modal').modal('show');
		$('#SerialNumber').html(atr);
	});

//Funcion para enviar al servidor el numero de serie que se debe eliminar.
	$('.btn-eliminar').click(function(e){
		
		var atr = $('#SerialNumber').html();
		//alert(atr);
		var form = $('#form-eliminar');
		var url = form.attr('action').replace(':SERIAL_ID',atr);
		var data = form.serialize();

		$.post(url,data,function(result){
			//alert(result.message);
			$('.modal').modal('hide');
			location.reload();
		//	row.fadeOut();
		}).fail(function(){
			alert("El usuario no ha sido eliminado");

		});

	});
});