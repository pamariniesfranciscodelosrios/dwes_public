<?php

if (!isset($_SESSION)) {
    session_start();
}
//Comprobamos que el usuario se haya autenticado
if (!isset($_SESSION['username'])) {
    die("error");
}

    setcookie("idioma_seleccionado", $_GET["idioma"], time() + 30000);
    header("Location:infoCookies.php");


?>