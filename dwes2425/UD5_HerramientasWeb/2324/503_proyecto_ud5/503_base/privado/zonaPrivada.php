<?php
    // Recuperamos la información de la sesión
    if(!isset($_SESSION)) {
        session_start();
    }

    // Y comprobamos que el usuario se haya autentificado
    if (!isset($_SESSION['usuario'])) {
       die("Error - debe <a href='index.php'>identificarse</a>.<br />");
    }



    echo "Vemos una cookie Privada prueba";

   // setcookie("privada", "Esta es una cookie privada", time()+3600, "/dwes/UD5-ProgramacionWeb/503_proyecto_ud5/503_base/privado/");
   // setcookie("privada2", "Esta es una cookie privada", time()+3600, "/privado");
    echo "<br>". $_SERVER['PHP_SELF'];
    
    echo $_COOKIE["privada"];
    
    echo "Vemos una cookie Privada prueba";
    echo $_COOKIE["privada2"];

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de productos</title>
</head>
<body>
    <h1>Bienvenido a la zona privada <?= $_SESSION['usuario'] ?></h1>
    <p>Pulse <a href="logout.php">aquí</a> para salir</p>
    <p>Volver al <a href="index.php">inicio</a></p>
    <h2>Listado de productos</h2>
    <ul>
        <li>Producto 1</li>
        <li>Producto 2</li>
        <li>Producto 3</li>
    </ul>
</body>
</html>

