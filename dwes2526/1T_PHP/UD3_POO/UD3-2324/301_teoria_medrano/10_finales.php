<?php
//Son clases opuestas a abstractas, ya que evitan que se pueda heredar una clase o método para sobreescribirlo.
 //************************************************************************************************
//*******************           CLASE  Producto, método Final       ********************************
//*************************************************************************************************

class Producto {
    public function __construct(private string $codigo) { } 

    public function getCodigo() : string {
        return $this->codigo;
    }

    // método Final :
    final public function mostrarResumen() : string {
        return "Producto ".$this->codigo;
    }
}
//************************************************************************************************
//*******************           CLASE  Microondas                  ********************************
//*************************************************************************************************
// No podremos heredar de Microondas
final class Microondas extends Producto {
    
    public function __construct(
        string $codigo,
        private int $potencia)
    {
        parent::__construct($codigo);
    }
    
    public function getPotencia() : int {
        return $this->potencia;
    }

    // No podemos implementar mostrarResumen()
   /* public function mostrarResumen() { // dará error
        echo "<p>Código ".$this->getCodigo().$this->getPotencia(). "</p>";
    }*/
}

//************************************************************************************************
//*******************           Test de las clases       ******************************************
//*************************************************************************************************

$nuevoMicroondas=new Microondas(76, 6000);
echo $nuevoMicroondas->mostrarResumen();
echo "<br/> Mostrar Resumen termina";
echo "<br/>1 - " . $nuevoMicroondas->getCodigo();
echo "<br/>2 - " . $nuevoMicroondas->getPotencia();


?>