<?php
//Lista de usuarios permitidos
$usuarios = array("admin", "abc123", "def456");


//Al hacer submit desde index.php comprobamos si se ha enviado el formulario
if(isset($_POST['enviar'])){
    $usuario = $_POST['username'];
    $password = $_POST['password'];
    //Validadmos que recibimos ambos parametros

    if(empty($usuario) || empty($password)){
        $error = "Debes introducir un usuario y contraseña";
        print $error;
        header("location:index.php");

    }else{
        //Comoprobamos si el usuario introducido esta en el array de usuarios
        if (in_array($usuario, $usuarios) && $password == "1234"){
            //Almacenamos el usuario de la sesion
            session_start();
            $_SESSION['username'] = $usuario;
            //cargamos la página principal
            header("location:perfil.php");

        }else{
            //Si las credenciales no son validas se vuelven a pedir
            $error = "Usuario o contraseña no validas";
            print $error;
            header("location:index.php");
        }
    }
}
?>