<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso_Pildoras</title>
</head>

<body>
<?php
    /*
        Alumno: Antonio Marin
        Fecha: 04/10/2023
        Finalidad: Ejercicios PHP Orientado a Objetos
     */

     //Importacion de las clases que se encuentran en un archivo externo.
     include '2_vehiculos.php';


    //Creacion de un coche y un camion dos clases diferentes.
    $mazda=new Coche();
    $volvo=new Camion();

    //Se imprime por pantalla la cantidad de ruedas de cada objeto. Creados ambos por defecto.
    echo "El mazda tiene " . $mazda->get_ruedas() . " ruedas <br>";
    echo "El volvo tiene " . $volvo->get_ruedas() . " ruedas <br>";

    echo "El mazda tiene " . $mazda->get_motor() . " de motor <br>";
    echo "El volvo tiene " . $volvo->get_motor() . " de motor <br>";

    ?>
</body>

</html>