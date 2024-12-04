<?php
//Recuperamos la sesion
if (!isset($_SESSION)) {
    session_start();
}
//Comprobamos que el usuario se haya autentificado
if(!isset($_SESSION['username'])){
    
    die("Error - debe <a href='index.php'>identificarse</a>");
}


 setcookie("idioma_seleccionado", $_GET["idioma"], time()+30000);
 header ("Location:infoCookies.php" );
?>

