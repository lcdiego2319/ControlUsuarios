$(document).ready(function(){
$('.btn-alert').click(function(e){

	var atr = $(this).attr('data-id');
		$('#myModal').modal('show');
		$('#SerialNumber').html(atr);
	});

//Funcion para enviar al servidor el numero de serie que se debe eliminar.
	$('.btn-eliminar').click(function(e){
         e.preventDefault();

		    var row = $(this).parents('tr');
		
		var atr = $('#SerialNumber').html();
		//alert(atr);
		var form = $('#form-eliminar');
		var url = form.attr('action').replace(':SERIAL_ID',atr);
		var data = form.serialize();
row.fadeOut(3000);
		$.post(url,data,function(result){
			//alert(result.message);
			$('#myModal').modal('hide');
			
			location.reload();
		//	row.fadeOut();
		}).fail(function(){
			$('#myModal').modal('hide');
			$('#myModal2').modal('show');
		});

	});
});