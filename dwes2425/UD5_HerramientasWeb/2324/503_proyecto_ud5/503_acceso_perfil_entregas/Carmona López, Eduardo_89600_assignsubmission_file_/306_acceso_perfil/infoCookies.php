<?php
if (!isset($_SESSION)) {
    session_start();
}
//Comprobamos que el usuario se haya autentificado
if (!isset($_SESSION['username'])) {

    die("Error - debe <a href='index.php'>identificarse</a>");
}
if($_COOKIE['idioma_seleccionado']=="en"){
    header("Location:infoCookiesEnglish.php");
}

$usuario = $_SESSION['username'];

print "Hola " . $usuario;
print "<p> Las Cookies, se almacena en nuestro Ordenador. Pueden almacenar, por ejemplo, la Fecha, hora y el tiempo permanecido en Web </p>";
print "<p> Diferentes propósitos, info necesaria para navegar por la web. Tiendas online, info de todo lo que lleva al Carro Compra...</p>";
print "<p> Gran Potencial para publicidad al guardar los habitos de navegación</p>";
print "<p> Desde no hace demasiado tiempo existe una Ley por la que se debe advertir y preguntar al usuario se guarda info en Cookies.</p>";
print "<p>  Puede permanecer en el disco duro lo que el programador quiera.Menu navegador... Borrar las cookies.</p>";
print "<p> Viene de la analogía del cuento de Hansel y Gretel de encuentra el camino de vuelta con migas de pan. </p>";
print "<p> Si no especificamos el tiempo de vida en la cookies, es 0 (se elimina al cerrar el ordenador) por defecto </p>";
print "<p> Si no especificamos el DIRECTORIO donde la cookie trabaja, lo hace en el actual y en los subdirectorios (4 parametro)</p>";

echo "<h2>Mostramos la variable superglobal de las cookies $ _COOKIE</h2>";
//print_r($_COOKIE);
foreach ($_COOKIE as $key => $valor)
    print "<br> KEY: " . $key . ", VALOR: " . $valor;


echo "<br><a href='main.php'>Volver a la pantalla de usuario</a>";
?>
