<?php
if (!isset($_SESSION)) {
    session_start();
}
//Comprobamos que el usuario se haya autentificado
if(!isset($_SESSION['username'])){

    die("Error - debe <a href='index.php'>identificarse</a>");
}


$usuario = $_SESSION['username'];

print "Hello ".$usuario;
print "<p> This information is about cookies </p>";

echo "<h2>Let's have a look into ssuperglobal cookies $ _COOKIE</h2>";
//print_r($_COOKIE);
foreach($_COOKIE as $key => $valor)
    print "<br> KEY: ". $key. ", VALOR: " . $valor;
    echo "<br><br><a  href='main.php'>VOLVER</a>";


?>
