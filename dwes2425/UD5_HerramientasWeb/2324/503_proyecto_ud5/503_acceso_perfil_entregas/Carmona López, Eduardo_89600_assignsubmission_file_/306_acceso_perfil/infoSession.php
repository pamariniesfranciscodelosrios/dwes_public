<?php
if (!isset($_SESSION)) {
    session_start();
}

//Comprobamos que el usuario se haya autentificado
if(!isset($_SESSION['username'])){

    die("Error - debe <a href='main.php'>identificarse</a>");
}


$usuario = $_SESSION['username'];

print "Hola ".$usuario;

print "<p>A diferencia de las cookies, las cuales guardan la información en el cliente, los valores, se guardan en el servidor, de forma inaccesible al cliente. Por ejemplo; puedes tener una variable en la sesión actual que sea 'logado', con el valor 'true', ésta información será accesible a todas las páginas PHP, y cada sesión tendrá sus propios valores, (cada explorador abierto en cada ordenador tiene su sesión propia (siempre y cuando se abra)), con ésto tienes la certeza de estar logado, ya que si fueran cookies el cliente podría manipular el valor y acceder a ellas, otra forma de saber si se está logado es meter en las cookies dos valores con el nombre del usuario y el password, y verificar cada vez estos valores,… a parte de que es mucho mas rápido obtenerlos de la sesión, esta información pasaría constantemente de una forma poco segura y además se quedaría guardado en el cliente, y otras personas podrían verlo.</p>";

echo "<h2>Mostramos la variable superglobal de las sesiones $ _SESSION</h2>";
//print_r($_COOKIE);
foreach($_SESSION as $key => $valor)
    print "<br> KEY: ". $key. ", VALOR: " . $valor;
?>
