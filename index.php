<?php 
include('Menu.class.php');
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<link href="estilo.css" rel="stylesheet">
	<script src="script.js" type="text/javascript"></script>
	<title>Realizar Pedido</title>
	<script>
		/*
		idElemento: Parametro opcional -> Se necesita obtener el valor de un elemento HTML para armar el queryString
		funcionCallback: string para asignacion de la funcion Callback 
		*/
		function realizarPeticionGET(idElementoHTML = "", queryString, funcionCallback ) {
			if(idElementoHTML != ""){
				var productoIngresado = document.getElementById(idElementoHTML).value;
				queryString += productoIngresado; 
			}
			var peticion = new XMLHttpRequest();
			
			peticion.open("GET",  queryString, true);
			
			//se convierte el string para que se pueda asignar la funcion 
			peticion.onreadystatechange = eval(funcionCallback); 
			peticion.send(null);

		}
	
		function mostrarInfoItemVenta(){
			//Mostrar informacion asociada al item de venta seleccionado 
			if ((peticion.readyState == 4) && (peticion.status == 200)) {
				var contenedorInfo = document.getElementById("idDivDatosPedido");	

			}
		}
		
		

		/**/
	</script>
	<!-- <link rel="stylesheet" href="styles.css"> --> 
</head>

<body>
	<h1>Comedor 22 de Diciembre</h1>
	<section>
		<article>
			<h3>Realizar Pedido Online</h3>
            <label>Elegir Item:</label>
			
            <select id="idCmbItemsVenta" name="cmbItemsVenta" onChange="realizarPeticionGET('idCmbItemsVenta', 'buscar_ItemsVenta.php?nombrePlatillo=', 'mostrarInfoItemVenta');">
                <option value="0">---</option>
                <?php 
					$ItemsVenta = Menu::getItemsVenta();
					foreach($ItemsVenta as $ItemVenta){
						echo '<option value="'.$ItemVenta->nombre_platillo.'">'.$ItemVenta->nombre_platillo.'</option>';
					}
                ?>
            </select>
			<p id="cantPed">Cantidad <input id="inpCant" type="number" min='1' max='25' required></p>
			<button onclick='cargarDatosPedido()'>Realizar Pedido</button>
            <div id="idDivDatosPedido"></div>
			
            
            
		</article>
	</section>
</body>

</html>