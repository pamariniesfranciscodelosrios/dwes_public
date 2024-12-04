<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CRUD</title>
<link rel="stylesheet" type="text/css" href="hoja.css">


</head>

<body>
<?php
  include ("conexion.php");
  //Para realizar la conexion se puede hacer en una sola linea.
  /*$conexion=$base->query("SELECT * FROM DATOS_USUARIOS");
  $registros = $conexion->fetchAll(PDO::FETCH_OBJ);*/

  $registros = $base -> query("SELECT * FROM DATOS_USUARIOS") -> fetchAll(PDo::FETCH_OBJ); 

?>

<h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>

  <table width="50%" border="0" align="center">
    <tr >
      <td class="primera_fila">Id</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Apellido</td>
      <td class="primera_fila">Dirección</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr> 
   
		<?php
    //Buble para mostrar todos los registros de personas de la BBDD.
      foreach ($registros as $persona) : ?>

   	<tr>
      <td><?php echo $persona->id ?></td>
      <td><?php echo $persona->Nombre ?></td>
      <td><?php echo $persona->Apellido ?></td>
      <td><?php echo $persona->Direccion ?></td>
      <!-- Botones para borrado y actulizacion -->
      <td class="bot"><a href="borrar.php?id=<?php echo $persona->id?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
      <td class='bot'><input type='button' name='up' id='up' value='Actualizar'></a></td>
    </tr>   
    
    <?php    endforeach;    ?>
	<tr>
    <!-- Fila en la cual tenemos inputs para introducir los datos -->
	<td></td>
      <td><input type='text' name='Nom' size='10' class='centrado'></td>
      <td><input type='text' name='Ape' size='10' class='centrado'></td>
      <td><input type='text' name=' Dir' size='10' class='centrado'></td>
      <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>    
  </table>

<p>&nbsp;</p>
</body>
</html>