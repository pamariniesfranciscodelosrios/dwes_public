<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("conexion.php");
        //Obtenemos el id del objeto a borrar.
        $id = $_GET["Id"];
        //Creamos la query para que con el id introducido lo borre en la base de datos
        $base -> query("DELETE FROM DATOS_USUARIOS WHERE ID='$id'");
        //Se vuelve a cargar el arvhivo del formulario.
        header("Location:index.php");
    ?>
</body>
</html>