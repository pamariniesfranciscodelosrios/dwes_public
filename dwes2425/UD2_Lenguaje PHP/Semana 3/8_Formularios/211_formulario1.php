<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "
http://www.w3.org/TR/html4/loose.dtd">
<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tema 2 : Características del Lenguaje PHP -->
<!-- Ejemplo: Formulario web -->
<html>
     <head>
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          <title>211 Formulario 1</title>
     </head>

     <body>
          <!-- Formulario de nombre input, action es la que me relaciona con el bloque para procesar -->
          <!-- method=  post o get -->
<form name="input" action="211_procesa1.php" method="post">

                         <!--creará una variable nombre -->
     Nombre del alumno: <input type="text" name="nombre" /><br />
          <p>Ciclos que cursa:</p>

          <!--creará un ARRAY modulos[] --> <!--DWES es el valor del 1er elemento del array y DWEC el segundo --> 
          <input type="checkbox" name="modulos[]" value="DWES" /> Desarrollo web en entorno servidor <br/>
          <input type="checkbox" name="modulos[]" value="DWEC" /> Desarrollo web en entorno cliente<br/>
          
          
          <br/>
          <!--creará una variable con valor "Enviar" -->
          <input type="submit" value="Enviar" />
          

</form>
     </body>
</html>