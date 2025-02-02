<?php

class Producto1 {
    const IVA = 0.23;
    // https://www.php.net/manual/es/language.constants.php:

//define('MAX_VALUE', '1.0');   // RIGHT - Works OUTSIDE of a class definition.
//const MIN_VALUE = 0.0;         RIGHT - Works both INSIDE and OUTSIDE of a class definition.

    public static $numProductos = 0; 

    public static function nuevoProducto() {
        self::$numProductos++;
    }
}

Producto1::nuevoProducto();
$impuesto = Producto1::IVA;

Producto1::nuevoProducto();
Producto1::nuevoProducto();

//¿En qué ocasión no creamos objetos? -> Metodos estaticos, variables estáticas
echo "El numero de productos hasta ahora es " .  Producto1::$numProductos;

?>


<?php
//Comenta una de las dos clases para ejecutar
class Producto2 {
    const IVA = 0.23;
    public static $numProductos = 0; 
    public /*private*/  $codigo;

    public function __construct(string $cod) {
        self::$numProductos++;
        $this->codigo = $cod;
        echo $this->mostrarResumen(); // llamamos desde el constructor para que muestre el resumen
    }

    public function mostrarResumen() : string {
        return "<br> El producto ".$this->codigo." es el número ".self::$numProductos;
    }
}

$prod1 = new Producto2("PS5");
$prod2 = new Producto2("XBOX Series X");
$prod3 = new Producto2("Nintendo Switch");
//echo $prod3->mostrarResumen();
//echo $prod2->mostrarResumen();  //Esto daria error, ya que siempre muestra el contandor final
?>