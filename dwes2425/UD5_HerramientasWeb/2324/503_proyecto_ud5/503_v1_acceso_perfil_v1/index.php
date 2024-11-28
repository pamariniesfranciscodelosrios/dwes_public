<head>
<meta charset="utf-8">
<title>index.php</title>
</head>
 
<body style="text-align:center; background-color:azure">
 
<h2>MOODLE CENTROS</h2>
<p>Esta prática es un sistema de login sin conexión a la base de datos</p>  
 
 
 
<form action="compruebalogin.php" method="post" style="display:inline-block; text-align:center ; margin-bottom: 10px; padding:10px; text-align:left; background: lightblue; border: 1px solid; border-color:black">
 
 
<table>
    <tr>
        <td class="izq">  Login </td>
        <td class="der"><input type="text" name="username" id="username"> </td>
     </tr>
    <tr>
        <td class="izq">  Contraseña </td>
        <td class="der"><input type="password" name="password" id="password"> </td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" name="enviar" value="Login"> </td>
 
    </tr>

   
</table>
<p><a href="registro.php">Pulse</a> para registrarse</p>

 
 
</body>
</html>