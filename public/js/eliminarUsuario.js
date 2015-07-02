$(document).ready(function(){
$('.myeditable').editable();


$('tr #row').dblclick(function(e) {
    e.preventDefault();
    var nombre = $(this).find('#nombre').text();
    var atr = $(this).attr('data-id');
    var _token = $(this).find('#_token').text();
    var colName = $(this).find('#nombre').attr('data-name');
   
    var datos = {};
    datos['_token'] = _token;///id es necesario este token para poder ingresar valores a la BD
    datos['id'] = atr;
    datos[colName] = nombre;// aqui va de nuevo el valor a enviar
    datos['columna'] = colName;//aqui va el nombre de la columna
    datos['valor'] = nombre;//aqui va el valor a enviar
    var form = $('#form-update');
    var url = form.attr('action');
    var data,
       $elems = $('.myeditable'),
        errors = $elems.editable('validate');
    if($.isEmptyObject(errors)) {
        data = $elems.editable('getValue'); //get all values
       
        $.ajax({
            type: 'POST',
            url: url, 
            data: datos, 
            dataType: 'json'
        }).success(function(response) {         
         location.reload();
            
        }).error(function() {            
        });
    } else {
      
        
    }
});
$('tr #rowCalibration').dblclick(function(e) {
    e.preventDefault();
    var nombre = $(this).find('#nombre').text();
    var atr = $(this).attr('data-id');
    var _token = $(this).find('#_token').text();
    var colName = $(this).find('#nombre').attr('data-name');
   
    var datos = {};
    datos['_token'] = _token;///id es necesario este token para poder ingresar valores a la BD
    datos['Transaction'] = atr;
    datos[colName] = nombre;// aqui va de nuevo el valor a enviar
    datos['columna'] = colName;//aqui va el nombre de la columna
    datos['valor'] = nombre;//aqui va el valor a enviar
    var form = $('#form-calibration');
    var url = form.attr('action');
    var data,
       $elems = $('.myeditable'),
        errors = $elems.editable('validate');
    if($.isEmptyObject(errors)) {
        data = $elems.editable('getValue'); //get all values
       
        $.ajax({
            type: 'POST',
            url: url, 
            data: datos, 
            dataType: 'json'
        }).success(function(response) {         
          location.reload();
            
        }).error(function() {            
        });
    } else {
      
        
    }
});

  $('.btn-delete').click(function(e){
      e.preventDefault();
      var row = $(this).parents('tr');
      var id = row.data('id');
      var form = $('#form-detele');
      var url = form.attr('action').replace(':USER_ID',id);
      var data = form.serialize();
      row.fadeOut();
      $.post(url, data, function(result){
          alert(result.message);
      }).fail(function(){
          alert('El usuario no fue elminado');
          row.show();
      });
  });
});

