<?php
    try {
        //Datos y atributos usados para la conexion por pdo a mysql 
        $base=new PDO ('mysql:host=localhost; dbname=dwes', 'root', '');
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARECTER SET utf8"); 
    } catch (Exception $e) {
        echo "la línea de error es: " . $e->getLine();
    }
?>