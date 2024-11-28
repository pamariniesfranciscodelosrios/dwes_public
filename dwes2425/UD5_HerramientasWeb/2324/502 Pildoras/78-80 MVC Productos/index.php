<?php
//Este archivo es el que hará referencia a la interfaz de usuario
//por tanto es el único , por ahora, que contiene HTML


?>
<head>

<style>
    td}{
        border:1px dotted #FF0000;
    }
</style>
<meta charset="utf-8">
<title>Productos View</title>
</head>

<body>

    <h1>Index del MVC</h1>
    <p>Esta prática es un sistema CRUD MVC, video 80 Píldoras</p>  

<?php
    require_once("controlador/Productos_controlador.php");
?>


</body>
</html>