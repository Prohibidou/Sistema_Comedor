<?php 
class ConexionDB{
    private $conexion; 

    //se instancia el objeto y se realiza la conexion
    public function __construct($servidor, $usuario, $password, $nombreDB){
        $this->conexion = new mysqli($servidor, $usuario, $password, $nombreDB); 
        if ($this->conexion->connect_error) {
            die('Error de conexion: ' . $this->conexion->connect_error);
        }
    }

    
    //consulta de seleccion y muestra resultado en una tabla. 
    public function realizar_consulta_seleccion($sql) {
        $resultado = $this->conexion->query($sql);
        if ($resultado->num_rows > 0) {
            return $resultado; 
        } else {
            echo "No se han encontrado resultados!";
        }
        //Liberacion de memoria
        $resultado->free();
    }

    //Insercion de datos mediante una transaccion
    public function realizar_consulta_escritura($sql){
        $this->conexion->query("Begin"); 
        $resultado_consulta = $this->conexion->query($sql);
        
        if($resultado_consulta){
            //No hubo problemas, confirmacion de transaccion
            $this->conexion->query("Commit");
        }else{
            //Hubo problemas, deshacemos la transaccion
            $this->conexion->query("Rollback");
            echo "Ha ocurrido un error en la ejecucion de la consulta"; 
        }
    }

    //Cerrar Conexion BD
    public function cerrar_conexion(){
        $this->conexion->close(); 
    }

}


    

?>