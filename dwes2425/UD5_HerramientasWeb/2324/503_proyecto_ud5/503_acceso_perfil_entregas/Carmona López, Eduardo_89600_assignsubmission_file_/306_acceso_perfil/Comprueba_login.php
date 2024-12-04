<?php
if(isset($_POST['enviar'])){
    $usuario=$_POST['username'];
    $password=$_POST['password'];

    //validamos que recibimos ambos parámetros
    if(empty($usuario)|| empty($password)){
        $error="Debes introducir un usuario y contraseña";
        include "index.php";
    }else{
        if($usuario=="admin" && $password=="admin"){
            //Almacenamos el usuario en la sesion
            session_start();
            $_SESSION['username']=$usuario;
            $_SESSION['edad']=22;
            $_SESSION['telefono']=627344344;
            $_SESSION['descripcion']="Usted tiene contratado 15 GB";
            //Cargamos la cagina principal
            header("Location:main.php");
        }else{
            //Si ls credenciales no son validas se vuelven a pedir
            $error="usuario o contraseña no validos";
            include "index.php";
        }
    }
}
?>