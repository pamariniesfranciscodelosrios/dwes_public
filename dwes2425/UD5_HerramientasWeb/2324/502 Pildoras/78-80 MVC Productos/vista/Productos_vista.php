<?php
//Este archivo es el que hará referencia a la interfaz de usuario
//por tanto es el único , por ahora, que contiene HTML


?>
<head>

<style>
    td{
        border:1px dotted #FF0000;
    }
</style>
<meta charset="utf-8">
<title>Productos View</title>
</head>

<body>

 
 //para simplificar
  
    <h2>Productos VIEW</h2>
    <p>Esta prática es un sistema CRUD MVC, video 80 Píldoras</p>  


    <table>

    <tr><td> Nombre del artículo </td>
    <?php
    
        foreach($matriz_productos as $registro){
            
            echo " <tr><td>" . $registro["nombrearticulo"] . " </tr></td>";
          }

    ?>

</table>
 

?>

     
     

 
    


</body>
</html>