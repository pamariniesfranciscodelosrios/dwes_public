<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paginación</title>
</head>
<body>
    <?php
        try {
            //Datos y atributos usados para la conexion por pdo a mysql 
            $base=new PDO ("mysql:host=localhost; dbname=dwes", "root", "");
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $base->exec('SET CHARACTER SET UTF8'); 

            $sql_total = "SELECT nombrearticulo, seccion, precio, paisdeorigen FROM PRODUCTOS WHERE seccion ='DEPORTES' LIMIT 0,3";
            $resultado = $base->prepare($sql_total);
            $resultado->execute(array());

            while ($registro = $resultado -> fetch(PDO::FETCH_ASSOC)) {
                echo "Nombre Articulo: " . $registro['nombrearticulo'] . " seccion: " . $registro['seccion'] . " precio: " . $registro['precio'] . " País: " . $registro['paisdeorigen']. "<br>";
            }

            $resultado -> closeCursor();
        } catch (Exception $e) {
            echo "la línea de error : " . $e->getLine();
        }
    ?>
</body>
</html>