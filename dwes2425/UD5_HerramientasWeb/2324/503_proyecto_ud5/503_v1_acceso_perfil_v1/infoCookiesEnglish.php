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

print "Hello ".$usuario;
print "<p>This information is about cookies</p>";

echo "<h2>Let´s have a look into superglobal  $ _COOKIE</h2>";
//print_r($_COOKIE);
foreach($_COOKIE as $key => $valor)
    print "<br> KEY: ". $key. ", VALOR: " . $valor;
?>


<p><a href="https://www.php.net/manual/es/features.sessions.php" target="_blank">Manual PHP Cookies</a> Más info acerca de Cookies en este manual</p>
<p><a href="privado/infoCookiesPrivado.php">Pulse</a> para ver las COOKIES PRIVADAS</p>
<p><a href="infoSession.php">Click</a> to go to SESSION info</p>
<p><a href="perfil.php">Click</a> to go to your profile</p>
<p><a href="registro.php">Click</a> to go to a new register</p>
<p><a href="logout.php">Click</a> to logout</p>