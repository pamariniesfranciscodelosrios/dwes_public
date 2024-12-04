<?php
//Recuperamos la session
session_start();

//y la destruimos

session_destroy(); 

// Destruimos todas las cookie poniendo expire en negativo
setcookie("hola", "Esta es una cookie de bienvenida", time()-100);
//Para determinar la duración de las cookies en PHP es emplea el parámetro expire. Si queremos eliminar una cookie en PHP, tan solo hay que crear una nueva cookie con el mismo nombre y asignar a la función expire un valor negativo o una fecha ya pasada. No existe otra función concreta para eliminar las cookies.


//Redirigimos a la pagina de login
header("location:index.php");

?>
