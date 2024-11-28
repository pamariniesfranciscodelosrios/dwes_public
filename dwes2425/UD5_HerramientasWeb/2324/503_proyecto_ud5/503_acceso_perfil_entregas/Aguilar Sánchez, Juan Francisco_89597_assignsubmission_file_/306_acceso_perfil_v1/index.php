<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <link rel = "icon" href = "codewithanonymous.png" type = "image/x-icon">
    <title>Netflix</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="./style.css">

</head>
<body>
<?php
/*
 Alumno: Juan F Aguilar Sanchez
 Fecha: 19/10/2022
 Finalidad: Ejercicios Tema 3 Conexion BBDD
 */
?>
<form action="comprueba_login.php" method="post">

<!-- Fomulario login Notflix (Netflix) -->
<div class="login">
    <h1 class="login__title">Sign In</h1>
    <!-- Formulario para recojer parametros como email o telefono y contraseña -->
    <div class="login__group">
        <input class="login__group__input" type="text" name="username" required="true" placeholder="Email or phone number"/>
    </div>
    <div class="login__group">
        <input class="login__group__input" type="password" name="password" required="true" placeholder="Password"/>
    </div>
    <!-- Boton para enviar login -->
    <button class="login__sign-in" type="submit" name="enviar">Sign In</button>
    <div class="login__secondary-cta"><a class="login__secondary-cta__text" href="#">Sing up</a>
        <a class="login__secondary-cta__text login__secondary-cta__text--need-help" href="#">Need help?</a></div>
</div>
<!-- partial -->
</form>
</body>
</html>