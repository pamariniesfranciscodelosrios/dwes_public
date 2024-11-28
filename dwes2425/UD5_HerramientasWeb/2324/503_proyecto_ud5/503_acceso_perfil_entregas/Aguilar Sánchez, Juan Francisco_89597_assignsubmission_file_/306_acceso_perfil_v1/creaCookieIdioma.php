<?php
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['username'])) {
    die("Error - debe <a href='index.php'>identificarse</a>");
}

setcookie("idioma_seleccionado", $_GET['idioma'], time()+30000);
header("Location: infoCookies.php");

?>