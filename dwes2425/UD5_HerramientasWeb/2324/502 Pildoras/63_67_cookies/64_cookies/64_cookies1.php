<!doctype html>
<html>

<head>
  <title>Video 67 </title>
</head>

  <body style="background-color:rgb(246,243,229);">

  <p>Mostrando Cookies<p> 
<?php
/*
  Alumno: Nombre Apellido1 Apellido2
  Fecha: DD/MM/AAAA
  Finalidad: 
*/

//funciónque utilizamos para CREAR una cookie.
setcookie("prueba1", "Esta es la información de nuestra primera cookie", time()+30);


print_r($_COOKIE);

?>





</body>

</html>
