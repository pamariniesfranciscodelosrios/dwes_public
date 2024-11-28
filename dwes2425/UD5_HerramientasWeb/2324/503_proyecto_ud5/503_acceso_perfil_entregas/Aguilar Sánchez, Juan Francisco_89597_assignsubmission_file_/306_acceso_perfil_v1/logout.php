<?php
session_start();
//Destruimos la sesion creada.
session_destroy();

//Redirigimos al login
header("Location: index.php");
?>