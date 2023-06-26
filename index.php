<?php 
include('Menu.class.php');
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Realizar Pedido</title>
	<script src="armarGrilla.js"></script>
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
			console.log("Info");
		}
		
		

		/**/
	</script>
	<!-- <link rel="stylesheet" href="styles.css"> --> 
</head>

<body>
	<section>
		<article>
			<h4>Comedor 22 de Diciembre</h4>
            <label>Seleccione un Item de Venta para realizar el pedido:</label>
			
            <select id="idCmbItemsVenta" name="cmbItemsVenta" onChange="realizarPeticionGET('idCmbItemsVenta', 'buscar_ItemsVenta.php?nombrePlatillo=', 'mostrarInfoItemVenta');">
                <option value="0">---</option>
                <?php 
					$ItemsVenta = Menu::getItemsVenta();
					foreach($ItemsVenta as $ItemVenta){
						echo '<option value="'.$ItemVenta->nombre_platillo.'">'.$ItemVenta->nombre_platillo.'</option>';
					}
                ?>
            </select>

            <div id="idDivDatosPedido"></div>
			
            
            
		</article>
	</section>
</body>

</html>