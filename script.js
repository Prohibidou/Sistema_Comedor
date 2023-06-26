function cargarDatosPedido(){
	var div = document.getElementById("idDivDatosPedido");
	
	var cant = document.getElementById("inpCant").value;
	var item = document.getElementById("idCmbItemsVenta").value
	
	if(cant > 0 && item != 0){
		
		div.innerHTML = "<br>Item: " + item + " - Cantidad: " + cant;
		
		//cargar Pedido a la base
	}
	
}