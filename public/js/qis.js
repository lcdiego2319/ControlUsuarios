$(document).ready(function(){

	$('#BtnAdd').click(function(){
		$('#qis').append("<tr><td>diego</td><td>karla</td><td><button type='button' id='BtnDelete' class='btn btn-primary'>Eliminar</button></td></tr>");
		//alert("test");
	});

	$(document).on('click','#BtnDelete',function(){
		alert('karla');
	});

});