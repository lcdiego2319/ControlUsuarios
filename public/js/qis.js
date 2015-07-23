/*FUNCTION: Para añadir un nuevo renglo a la tabla, los renglones sera agregado al final de la tabla.*/
function newRow()
{
	//alert(this);
	var tb1 = document.getElementById('qis');
	var row = tb1.insertRow(tb1.rows.length); //localizar el ultimo renglon de la tabla para añadir uno nuevo
	var i = 0;
	for(i = 0; i < tb1.rows[0].cells.length; i++)//conocer cuantas celdas hay en los renglones para añadirlos al nuevo renglon.
	{
		createCell(row.insertCell(i),i,0);
	}
}

/*Funcion modificar la nueva celda creada en la tabla*/
function createCell(cell,indice,tipo)
{
	var div = document.createElement('div');
	var btn = document.createElement('button');
	//btn.onclick = function(){appendRow(this)};
	var txt = document.createTextNode("Contenido") ;
	btn.appendChild(txt);
	//div.setAttribute('class',style);

	if(indice == 0)//Si es la primera celda creada debera contar con el id que se active en jquery para mostrar el modal.
	{
		if(tipo == 1)
		{
			cell.id = "tableModal";
			cell.appendChild(btn);	
		}
		else
		{
			cell.id = "tableRowClick";
			cell.appendChild(btn);	
		}
	}
	else
	{

	cell.appendChild(btn);
	cell.className = "item";
		
	}
}

/*FUNCTION: Para añadir una nueva columna en la tabla, la columna sera agregada en al final de la tabla.*/
function newColumn()
{
	var tb1 = document.getElementById('qis');
	var i = 0;
	for(i = 0; i < tb1.rows.length; i++)
	{
		createCell(tb1.rows[i].insertCell(tb1.rows[i].cells.length),i,1);
	}
}

/*FUNCTION: Para añadir una nueva columna a partir de la columna que el usuario selecciono.*/
function appendColumnLast(i)
{
	 /*var x=document.getElementById('qis').rows[0].cells
    x[0].colSpan="2"
  */
  //alert("karla "+id.cellIndex);
  var tb1 = document.getElementById('qis');
  //var i =id.cellIndex;
  for(x = 0; x < tb1.rows.length; x++)
  {
  	createCell(tb1.rows[x].insertCell(i),x,1);
  }

}

/*FUNCTION: Para añadir una columna despues de la columna seleccionada previamente por el usuario.*/
function appendColumnNext(i)
{//antes id
	var tb1 = document.getElementById('qis');
  	 //i =id.cellIndex + 1;
  	 i = i + 1;
  	//alert(i);
  	for(x = 0; x < tb1.rows.length; x++)
  	{
  		createCell(tb1.rows[x].insertCell(i),x);
  	}
}


/*FUNCTION: Para crear una nueva fila arriba de la fila seleccionada por el usuario.*/
function appendUpRow(x)
{
	var tb1 = document.getElementById('qis');
	var row = tb1.insertRow(x); //localizar el ultimo renglon de la tabla para añadir uno nuevo
	var i = 0;
	for(i = 0; i < tb1.rows[0].cells.length; i++)//conocer cuantas celdas hay en los renglones para añadirlos al nuevo renglon.
	{
		createCell(row.insertCell(i),i,0);
	}
}

/*FUNCTION: Para crear una nueva fila debajo de la selecionada por el  usuario.*/
function appendDownRow(x)
{
	var tb1 = document.getElementById('qis');
	var row = tb1.insertRow(x + 1); //localizar el ultimo renglon de la tabla para añadir uno nuevo
	var i = 0;
	for(i = 0; i < tb1.rows[0].cells.length; i++)//conocer cuantas celdas hay en los renglones para añadirlos al nuevo renglon.
	{
		createCell(row.insertCell(i),i,0);
	}
}

/*FUNCTION: Para eliminar la fila seleccionada por el usuario.*/
function deleteRow(x)
{
	var tb1 = document.getElementById('qis');
	tb1.deleteRow(x);
}

/*FUNCTION: Para eliminar la columna seleccionada por el usuario*/
function deleteColumn(i){
	var tb1 = document.getElementById('qis');
	for(x = 0; x < tb1.rows.length; x++)
	{
		tb1.rows[x].deleteCell(i);
	}
}
/**/
function firstRow()
{

	var tb1 = document.getElementById('qis');
	var row = tb1.insertRow(0);
	var i = 0;
	for(i = 0; i < tb1.rows[1].cells.length; i++)//conocer cuantas celdas hay en los renglones para añadirlos al nuevo renglon.
	{
		createCell(row.insertCell(i),i);
	}
}

