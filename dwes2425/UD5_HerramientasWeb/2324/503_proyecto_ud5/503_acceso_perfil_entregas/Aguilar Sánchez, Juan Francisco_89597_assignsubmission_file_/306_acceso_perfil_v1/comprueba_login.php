<?php
    $user= ["admin"=>"admin", "juan"=>"juan", "edu"=>"eduardo", "usuario"=>"usuario"];
    if (isset($_POST['enviar'])){
        $usuario = $_POST['username'];
        $password = $_POST['password'];

        if (empty($usuario) || empty($password)){
            $error = "Debes introducir un usuario y contraseña";
            //include "index.php";

        } else {
            //if (in_array($usuario,$user) && $password === $user[$usuario]){
            if ($usuario == "admin" && $password == "admin"){
                session_start();
                $_SESSION['username']=$usuario;
                $_SESSION['password']=$password;
                $_SESSION['age']=20;
                header("Location: main.php");
                //include "main.php";
            } else {
                $error = "Usuario o contraseña no válidos";
                header("Location: index.php");
            }
        }
    }
?>