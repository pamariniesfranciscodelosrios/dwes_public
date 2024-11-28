<?php
//Recuperamos la sesion
if (!isset($_SESSION)) {
    session_start();
}
//Comprobamos que el usuario se haya autentificado
if(!isset($_SESSION['username'])){
    
    die("Error - debe <a href='index.php'>identificarse</a>");
}
//Derecho de Olvido
?>


<p><a href="https://www.php.net/manual/es/features.sessions.php" target="_blank">Manual PHP Cookies</a> Más info acerca de Cookies en este manual</p>
<p><a href="infoSession.php">Pulse</a> para ver las SESIONES</p>
<p><a href="registro.php">Pulse</a> para ir a registro</p>
<p><a href="logout.php">Pulse</a> para cerrar session</p>