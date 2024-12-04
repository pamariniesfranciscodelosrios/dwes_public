<?php
//Recuperamos la session
session_start();

//y la destruimos

session_destroy();

//Redirigimos a la pagina de login
header("location:index.php");

?>
