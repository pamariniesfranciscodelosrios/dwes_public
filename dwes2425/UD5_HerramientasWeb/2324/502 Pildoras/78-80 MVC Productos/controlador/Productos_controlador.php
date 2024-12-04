<?php

    include("modelo/Productos_modelo.php"); //incluimos el resto de archivos MVC
    


    //ejecuto el constructor del modelo

    $producto = new Productos_modelo(); //creamos objeto y se llama al constructor

    $matriz_productos= $producto->get_productos();

    include("vista/Productos_vista.php");


?>