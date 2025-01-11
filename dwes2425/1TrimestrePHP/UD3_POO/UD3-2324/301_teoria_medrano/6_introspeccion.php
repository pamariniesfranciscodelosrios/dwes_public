<?php
include("5_producto.php"); // Incluyo la clase producto.

print "<h2> <br/> 6 _Introspección </h2>";

$p = new Producto2("PS5");

if ($p instanceof Producto2) {
    echo "<br/> 1- Es un producto";
    echo "<br/> 2- La clase es ".get_class($p);

    //creamos un alias de la clase y un objeto
    class_alias("Producto2", "Articulo", true);
    $c = new Articulo("Nintendo Switch");

    echo "<br/> 3- Un articulo es un ".get_class($c);

    //get_class_methods / get_class_vars / get_object_vars: Devuelve un array con los nombres de los métodos / propiedades de una clase / propiedades de un objeto que son accesibles desde dónde se hace la llamada.
    echo "<br/> 4- get_class_methods: ";
    print_r(get_class_methods("Producto2")); 

    echo "<br/> 5- get_class_vars: ";
    print_r(get_class_vars("Producto2")); //deberían ser públicos para poder verse

    echo "<br/> 6- get_object_vars: ";
    print_r(get_object_vars($p)); //deberían ser públicos para poder verse

    //condicional para mostrarResumen
    echo "<br/> 7- if (method_exists(p, mostrarResumen)) ";
    if (method_exists($p, "mostrarResumen")) {
        $p->mostrarResumen();
    }
}

?>