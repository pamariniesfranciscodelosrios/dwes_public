<head>
<meta charset="utf-8">
<title>305_Auth_No_bbdd</title>
</head>

<body>

<h2>305_Practica Autenticacion sin bbdd</h2>
<p>En esta práctica todo se controla con cookies y sesiones, sin conexión a bbdd</p>  
<p>Una sesión establece una relación anónima con un usuario particular, de manera que podemos saber si es el mismo usuario entre dos peticiones distintas. Si preparamos un sistema de login, podremos saber quien utiliza nuestra aplicación.</p> 
<p>Para ello, preparemos un sencillo sistema de autenticación:</p> 
<p>1 Mostrar el formulario login/password</p> 
<p>2 Comprobar los datos enviados</p> 
<p>3 Añadir el login a la sesión</p> 
<p>4 Comprobar el login en la sesión para realizar tareas específicas del usuario</p> 
<p>5 Eliminar el login de la sesión cuando el usuario la cierra. </p>   
<p>usuario/admin admin </p>   

<p>En la actualidad la autenticación de usuario no se realiza gestionando la sesión direcamente, sino que se realiza mediante algún framekwork que abstrae todo el proceso o la integración de mecanismos de autenticación tipo OAuth, como Laravel.
</p>  

<form action='login.php' method='post'>
  <fieldset>
    <legend>Login</legend>
    <div><span class='error'><?php echo $error; ?> </span></div>
    <div class='fila'>
        <label for='usuario'>Usuario:</label><br />
        <input type='text' name='inputUsuario' id='usuario' maxlength="50" /><br />
    </div>
    <div class='fila'>
        <label for='password'>Contraseña:</label><br />
        <input type='password' name='inputPassword' id='password' maxlength="50" /><br />
    </div>
    <div class='fila'>
        <input type='submit' name='enviar' value='Enviar' />
    </div>
  </fieldset>
  </form>



 
 

</body>
</html>




