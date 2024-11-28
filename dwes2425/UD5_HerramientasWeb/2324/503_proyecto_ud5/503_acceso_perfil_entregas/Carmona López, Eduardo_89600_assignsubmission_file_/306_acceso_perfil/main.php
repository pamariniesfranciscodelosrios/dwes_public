<!doctype html>
<html lang="en">
<head>
    <link href="perfil.css"
          rel="stylesheet" type="text/css">

    <title>Perfil</title>
</head>
<body>
<?php
session_start();
?>

<aside class="profile-card">


    <header>
        <table>
            <tr>
                <td>Elige el idioma para ver las cookies</td
            </tr>
            <tr>
                <td >  <a href="infoCookies.php"> <img src="img/idiom.jpg" width="90" height="60"> </a></td>
                <td > <a href="creaCookieIdioma.php?idioma=es"> <img src="img/esp.png" width="90" height="60"> </a> </td>
                <td >  <a href="creaCookieIdioma.php?idioma=en">  <img src="img/uk.jpg" width="90" height="60"> </a></td>
            </tr>
        </table>
        <a target="_blank" href="#">
            <img src="https://img.freepik.com/vector-gratis/hombre-muestra-gesto-gran-idea_10045-637.jpg?w=740&t=st=1666698679~exp=1666699279~hmac=0e276848babeaecccdfbac575eaebf4929b375e49f8a166bdc5b1deefab52db2"
                 class="hoverZoomLink">
        </a>

        <?php
        print ("<h1>" . $_SESSION['username'] . "</h1>");
        ?>


        <h2>
            Edad: <?php print ($_SESSION['edad']);
            ?>
        </h2>
        <h2>
            Telefono: <?php print ($_SESSION['telefono']);
            ?>
        </h2>

    </header>

    <div class="profile-bio">

        <p>
            <?php print ($_SESSION['descripcion']);
            ?>
        </p>

        <?php
        setcookie("privada", "coocki hola", time() + 3600);
        echo "guardamos una coocki";
        ?>
        <br>
        <br>
        <a href="infoCookies.php"> Mostrar info cookies</a>
        <br>
        <a href="infoSession.php"> Mostrar info sessions</a>
        <a href="logout.php">CERRAR SESION</a>

    </div>

</aside>

</body>
</html>