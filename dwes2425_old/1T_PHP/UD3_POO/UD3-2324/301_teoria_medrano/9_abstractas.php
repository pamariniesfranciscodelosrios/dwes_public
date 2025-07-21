<?php
// Clase abstracta
/*
Las clases abstractas obligan a heredar de una clase, ya que no se permite su instanciación. Se define mediante abstract class NombreClase {.
Una clase abstracta puede contener propiedades y métodos no-abstractos, y/o métodos abstractos.
 */
 //************************************************************************************************
//*******************           CLASE  Abstracta Producto          ********************************
//*************************************************************************************************

abstract class Producto {
    public function __construct(private string $codigo) { } 
    public function getCodigo() : string {
        return $this->codigo;
    }
    // Método abstracto
    abstract public function mostrarResumen();
}


//*************************************************************************************************
//*******************           CLASE  Tv          ************************************************
//*************************************************************************************************
 //Cuando una clase hereda de una clase abstracta, obligatoriamente debe implementar los métodos que tiene el padre marcados como abstractos.

class Tv extends Producto { //Hereda de clase abstracta
    public function __construct(
        string $codigo,
        private int $pulgadas,
        private string $tecnologia)
    {
        parent::__construct($codigo);
    }

    public function mostrarResumen() { //obligado a implementarlo
        echo "<p>Código ".$this->getCodigo()."</p>";
        echo "<p>TV ".$this->tecnologia." de ".$this->pulgadas."</p>";
    }
}


 //************************************************************************************************
//*******************           Test de las clases       ******************************************
//*************************************************************************************************

$nuevaTele = new Tv(46, 65, "Oled"); //Objeto de Tv
 $nuevaTele->mostrarResumen();




?>