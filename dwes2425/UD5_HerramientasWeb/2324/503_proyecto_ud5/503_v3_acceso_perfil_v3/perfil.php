<?php
//Recuperamos la sesion
if (!isset($_SESSION)) {
    session_start();
}
//Comprobamos que el usuario se haya autentificado
if(!isset($_SESSION['username'])){
    
    die("Error - debe <a href='index.php'>identificarse</a>");
}
$usuario = $_SESSION['username'];

print "Hola ".$usuario;

echo "Guardamos una cookie prueba";
setcookie("hola", "Esta es una cookie de bienvenida");

echo "Guardamos una cookie Privada prueba";
setcookie("privada", "Esta es una cookie privada", time()+3600, "dwes/UD5-ProgramacionWeb/503_practica_ud5/privado");




?>


<p><a href="infoCookies.php">Pulse</a> para ver las Cookies almacenadas</p>
<p><a href="infoSession.php">Pulse</a> para ver las Sesiones almacenadas</p>



<p><a href="registro.php">Pulse</a> para ir a registro</p>
<p><a href="logout.php">Pulse</a> para cerrar session</p>
