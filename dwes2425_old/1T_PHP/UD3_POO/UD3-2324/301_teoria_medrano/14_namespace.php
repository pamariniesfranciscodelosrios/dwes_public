<?php
//Se declaran en la primera línea mediante la palabra clave namespace seguida del nombre del espacio de nombres asignado (cada subnivel se separa con la barra invertida \):


namespace Dwes\Ejemplos;

const IVA = 0.21;

class Producto {
    public $nombre="EjemploProducto";
      
    public function muestra() : void {
        echo"<p>Prod:" . $this->nombre . "</p>";
    }
}

//Uso del namespace Dwes\Ejemplos, clase Producto.
$producto=new Producto();
$producto->muestra();

?>