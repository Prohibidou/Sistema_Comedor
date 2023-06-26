<?php
class Menu
{ 
    public static function getItemsVenta()
    {
        $conexion = new mysqli("localhost", "root", "", "comedordb") or die("No es posible establecer conexion.");
        $consulta = "SELECT iv.nro_item_venta, iv.precio_comida_menu, iv.cantidad_disponible_platillo, p.cod_platillo, p.nombre_platillo, p.descripcion_platillo FROM itemventa iv 
            inner join platillo p on p.cod_platillo = iv.cod_platillo";
        $productos = $conexion->query($consulta) or die("No se ha podido realizar la consulta");

        $listaProductos = array();
        while ($registro = $productos->fetch_object()) {
            $unProducto = new StdClass();
            $unProducto->nro_item_venta = $registro->nro_item_venta;
            $unProducto->precio_comida_menu = $registro->precio_comida_menu;
            $unProducto->cantidad_disponible_platillo = $registro->cantidad_disponible_platillo;
            $unProducto->cod_platillo = $registro->cod_platillo;
            $unProducto->nombre_platillo = $registro->nombre_platillo;
            $unProducto->descripcion_platillo = $registro->descripcion_platillo;
            $listaProductos[] = $unProducto;
        }

        $productos->free();
        $conexion->close();
        return $listaProductos;
    }

    public static function getItemVenta($idItemVenta){
        //Se obtiene el ItemVenta asociado con su id (info)
    }

    
}
?>