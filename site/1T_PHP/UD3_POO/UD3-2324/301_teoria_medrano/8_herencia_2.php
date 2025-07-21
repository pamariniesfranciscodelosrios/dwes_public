<?php
/*
Constructor en hijos¶
En los hijos no se crea ningún constructor de manera automática. 
Por lo que si no lo hay, se invoca automáticamente al del padre. 
En cambio, si lo definimos en el hijo, hemos de invocar al del padre de manera explícita.

*/
 //*************************************************************************************************
//*******************           CLASE  Producto          ******************************************
//*************************************************************************************************
class Producto {
    public function __construct(private string $codigo) { } //En PHP 8 podemos inicializar los atributos de clase desde los parámetros de constructor
 
    
    //Lo anterior hasta PHP7 se haría:
    /*public string $codigo;
    public function __construct(string $codigo) {
        $this->codigo = $codigo;*/
    
    public function mostrarResumen() {
          echo "<p> Prod:".$this->codigo."</p>";
     }    

}
 //*************************************************************************************************
//*******************           CLASE  Tv          ******************************************
//*************************************************************************************************
class Tv extends Producto {

    /* Forma php 8
    public function __construct(
        string $codigo,
        private int $pulgadas,
        private string $tecnologia)
    {
        parent::__construct($codigo);
    }*/

    //Forma clásica
    private int $pulgadas;
    private string $tecnologia;

    
    public function __construct($codigo, $pulgadas,$tecnologia)
    {
        parent::__construct($codigo);
        $this->pulgadas=$pulgadas;
        $this->tecnologia=$tecnologia;
    }



    public function mostrarResumen() {
        parent::mostrarResumen(); //Llama a la función del padre
        echo "<p>TV ".$this->tecnologia." de ".$this->pulgadas."</p>";
    }
}

 //************************************************************************************************
//*******************           Test de las clases       ******************************************
//*************************************************************************************************
// LAS PROBAMOS.
$nuevoProducto = new Producto(45); //Objeto nuevo
$nuevaTele = new Tv(46, 65, "Oled"); //Objeto de Tv

$nuevoProducto->mostrarResumen();
$nuevaTele->mostrarResumen(); 
?>