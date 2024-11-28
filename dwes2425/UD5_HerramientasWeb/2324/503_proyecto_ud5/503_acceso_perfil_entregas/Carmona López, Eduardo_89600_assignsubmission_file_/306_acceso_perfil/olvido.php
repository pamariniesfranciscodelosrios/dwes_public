<?php
//Recuperamos la sesion
if (!isset($_SESSION)) {
    session_start();
}
//Comprobamos que el usuario se haya autentificado
if(!isset($_SESSION['username'])){

    die("Error - debe <a href='index.php'>identificarse</a>");
}
//Derecho de Olvido: Borramos cookies

//setcookie("hola", "Esta es una cookie de bienvenida", time()-100);

echo "<h2>Hemos borrado las COOKIES (expire negativo) $ _COOKIE</h2>";
foreach($_COOKIE as $key => $valor){
    print "<br> Borrando ... KEY: ". $key. ", VALOR: " . $valor;
    setcookie($key, $valor, time()-100);

}
?>


<p><a href="https://www.php.net/manual/es/features.sessions.php" target="_blank">Manual PHP Cookies</a> Más info acerca de Cookies en este manual</p>


<p><a href="infoCookies.php">Pulse</a> para ver las Cookies almacenadas</p>
<p><a href="infoSession.php">Pulse</a> para ver las Sesiones almacenadas</p>
<p><a href="main.php">Pulse</a> para ir a PERFIL</p>

<p><a href="logout.php">Pulse</a> para cerrar session</p>