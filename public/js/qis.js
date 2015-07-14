$(document).ready(function(){
	$(document).on('click','#BtnAddRow',function(){
		row = "<tr>";
		$('#qis tr').eq(1).each(function(){
			$(this).find('td').each(function(){
				row = row + "<td>Diego</td>";
			});
		});
		row = row + "</tr>";
		$('#qis').append(row);
	});

	$(document).on('click','#BtnAddCol',function() {
		$('#qis').find('tr').each(function(){
			 $(this).find('td').last().after('<td>Diego</td>');
		});
	});
	$(document).on('click','#BtnDelete',function(){
		alert('karla');
	});

	$(document).on('click','#BtnSplit',function(){
		alert($(this).parents('td').html());

		$("<table><tr><td>d</td><td>k</td><td>k</td></tr></table>").appendTo($(this).parents('td'));
	});
	

});