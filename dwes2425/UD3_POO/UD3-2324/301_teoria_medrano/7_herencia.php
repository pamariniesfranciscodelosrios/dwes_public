<?php

//*************************************************************************************************
//*******************           CLASE  Producto          ******************************************
//*************************************************************************************************

class Producto {
    //atributos de la clase Producto
    public $codigo;
    public $nombre;
    public $nombreCorto;
    public $PVP;

    public function mostrarResumen() {
        echo "<p> Prod:".$this->codigo."</p>";
    }
}
//*************************************************************************************************
//*******************    CLASE Tv extends Producto       ******************************************
//*************************************************************************************************
class Tv extends Producto { //clase que hereda de Producto
    public $pulgadas;
    public $tecnologia;

    /*Sobreescribir métodos¶
    Podemos crear métodos en los hijos con el mismo nombre que el padre, cambiando su comportamiento. Para invocar a los métodos del padre -> parent::nombreMetodo()
    */
    public function mostrarResumen() { //sobreescribiendo el método mostrarResumen∫∫
        parent::mostrarResumen();
        echo "<p>TV ".$this->tecnologia." de ".$this->pulgadas."</p>";
     }
}

//Podemos utilizar las siguientes funciones para averiguar si hay relación entre dos clases:
//get_parent_class(object): string
//is_subclass_of(object, string): bool

// LAS PROBAMOS.
$t = new Tv(); //Objeto de Tv
$t->codigo = 33;
$t->tecnologia="OLED";
$t->pulgadas=65;

if ($t instanceof Producto) {
    echo $t->mostrarResumen();
}

$padre = get_parent_class($t);
echo "<br> La clase padre es: " . $padre;

$objetoPadre = new $padre;
$objetoPadre->codigo=43; //añado un código al objeto, podría ir en la llamada mejor, o en el constructor.

echo $objetoPadre->mostrarResumen();

if (is_subclass_of($t, 'Producto')) {
    echo "<br>Soy un hijo de Producto";
}

?>