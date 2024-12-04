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

print "<p>A diferencia de las cookies, las cuales guardan la información en el cliente, los valores, se guardan en el servidor, de forma inaccesible al cliente. Por ejemplo; puedes tener una variable en la sesión actual que sea 'logado', con el valor 'true', ésta información será accesible a todas las páginas PHP, y cada sesión tendrá sus propios valores, (cada explorador abierto en cada ordenador tiene su sesión propia (siempre y cuando se abra)), con ésto tienes la certeza de estar logado, ya que si fueran cookies el cliente podría manipular el valor y acceder a ellas, otra forma de saber si se está logado es meter en las cookies dos valores con el nombre del usuario y el password, y verificar cada vez estos valores,… a parte de que es mucho mas rápido obtenerlos de la sesión, esta información pasaría constantemente de una forma poco segura y además se quedaría guardado en el cliente, y otras personas podrían verlo.</p>";

echo "<h2>Mostramos la variable superglobal de las sesiones $ _SESSION</h2>";
//print_r($_COOKIE);
foreach($_SESSION as $key => $valor)
    print "<br> KEY: ". $key. ", VALOR: " . $valor;

?>

<p><a href="https://www.php.net/manual/es/features.cookies.php" target="_blank">Manual PHP Cookies</a> Más info acerca de Cookies en este manual</p>
<p><a href="infoCookies.php">Pulse</a> para ver las COOKIES</p>
<p><a href="perfil.php">Pulse</a> para ir a perfil</p>
<p><a href="registro.php">Pulse</a> para ir a registro</p>
<p><a href="logout.php">Pulse</a> para cerrar session</p>