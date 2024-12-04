<?php
//Recuperamos la sesion
//if (!isset($_SESSION)) {
    session_start();
//}
//Comprobamos que el usuario se haya autentificado
if(!isset($_SESSION['username'])){
    
    die("Error - debe <a href='index.php'>identificarse</a>");
}
$usuario = $_SESSION['username'];

print "<h2>Hola $usuario </h2>";

// Creamos una cookie de prueba
echo "<br>Guardamos una cookie prueba";
setcookie("hola", "Esta es una cookie de bienvenida", time()+3600);

echo "<br>Guardamos una cookie Privada prueba";
setcookie("privada", "Esta es una cookie de bienvenida", time()+3600, "dwes/Tema3_AppWeb/306_acceso_perfil/privado");


// Comprobamos si la variable ya existe
if (isset($_SESSION['visitas']))
    $_SESSION['visitas']++;
else
    $_SESSION['visitas'] = 0;







?>

 <tr>
        <td> <h1> Elige idioma para ver las cookies</h1>  </td>
 
    </tr>
    <tr> <!-- que hace ?idioma=es  -->
        <td align="center"> <a href="infoCookies.php">  <img src="img/idiom.jpg" width="90" height="60"></a></td>
        <td align="center"> <a href="creaCookieIdioma.php?idioma=es">  <img src="img/esp.png" width="90" height="60"></a></td>
        <td align="center"> <a href="creaCookieIdioma.php?idioma=en">  <img src="img/uk.jpg" width="90" height="60"> </a> </td>
    </tr>


<p><a href="olvido.php">Pulse</a> BORRAR Cookies almacenadas</p>
<p><a href="infoCookies.php">Pulse</a> para ver las Cookies almacenadas</p>
<p><a href="infoSession.php">Pulse</a> para ver las Sesiones almacenadas</p>



<p><a href="registro.php">Pulse</a> para ir a registro</p>
<p><a href="logout.php">Pulse</a> para cerrar session</p>


<?php

echo "<br>CONTADOR de visitas: " ;
print_r($_SESSION['visitas']);
?>