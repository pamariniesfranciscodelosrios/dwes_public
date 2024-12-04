<?php
//Al hacer submit desde index nos lleva a esta página login.php, el cual hace de controlador
session_start();
// Comprobamos si ya se ha enviado el formulario
if (isset($_POST['enviar'])) {
    $usuario = $_POST['inputUsuario'];
    $password = $_POST['inputPassword'];

    // validamos que recibimos ambos parámetros
    
    if (empty($usuario) || empty($password)) {
        $_SESSION['error'] = "Debes introducir un usuario y contraseña";
        header("location:index.php");
    } else {
        if ($usuario == "admin" && $password == "admin") {
            // almacenamos el usuario en la sesión
            unset($_SESSION['error']); //destruimos el error si entra bien para que no aparezca
            $_SESSION['usuario'] = $usuario;
            // cargamos la página principal
            header("location:main.php");
        } else {
            // Si las credenciales no son válidas, se vuelven a pedir
            $_SESSION['error'] = "Usuario o contraseña no válidos!";
    
            header("location:index.php");
        }
    }
}

?>