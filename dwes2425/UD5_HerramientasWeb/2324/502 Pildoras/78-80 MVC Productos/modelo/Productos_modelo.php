<?php

    class Productos_modelo{
        private $db;
        private $productos;

        public function __construct(){
            //primero conectar con la bbdd
            include("modelo/Conectar.php");
            $this->db=Conectar::conexion();
            $this->productos=array(); //creará un array autmaticamente

        }

        /*
        public function get_productos(){
           $consulta= $this->db->query("SELECT * FROM productos"); 



           //recuperamos las filas
           while($filas=consulta->fetch(PDO::FETCH_ASSOC)){
                echo print_r($filas);
                $this->productos[]=$filas;
                //almaceno cada registro en una fila del array productos.

           }
           return $this->productos;

        }
        */
        
        /*
        COMENTARIO Youtube:
        Excelente muchas gracias, yo en vez de usar el while devolví directamente todos los registros con fetchAll(), así:*/

        public function get_productos()
        {
            $consulta = 'SELECT * FROM productos;';

            $productos = $this->db->query($consulta)->fetchAll();

            return $productos;
        }
        
         


    }

?>