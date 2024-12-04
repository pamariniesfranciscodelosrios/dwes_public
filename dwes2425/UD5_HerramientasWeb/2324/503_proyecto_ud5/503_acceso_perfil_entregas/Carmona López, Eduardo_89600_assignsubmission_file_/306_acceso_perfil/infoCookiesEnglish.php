<?php
if (!isset($_SESSION)) {
    session_start();
}
//Comprobamos que el usuario se haya autentificado
if (!isset($_SESSION['username'])) {

    die("Error - debe <a href='index.php'>identificarse</a>");
}


$usuario = $_SESSION['username'];
echo ("This is the best page for ever,");
echo "<h2>Show the global cookies $ _COOKIE</h2>";
//print_r($_COOKIE);
foreach ($_COOKIE as $key => $valor)
    print "<br> KEY: " . $key . ", VALOR: " . $valor;


echo "<br><a href='main.php'>Return to my profile</a>";
?>
