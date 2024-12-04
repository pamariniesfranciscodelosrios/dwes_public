<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix-Perfil</title>

    <link rel="stylesheet" href="./animation.scss">
    <style>

        /* From uiverse.io by @alexmaracinaru */

        .card .card-border-top {
            width: 100%;
            height: 15px;
            background: rgba(255, 255, 255, 0.45);
            margin: auto;
            margin-top: 0px;
            border-radius: 0px 0px 15px 15px;
        }

        .card span {
            font-weight: 600;
            color: white;
            text-align: center;
            display: block;
            padding-top: 10px;
            font-size: 25px;
        }

        .card .job {
            font-weight: 400;
            color: white;
            display: block;
            text-align: center;
            padding-top: 3px;
            font-size: 15px;
        }

        .card .img {
            width: 70px;
            height: 70px;
            background: rgba(255, 255, 255, 0.50);
            border-radius: 15px;
            margin: auto;
            margin-top: 25px;
            padding: 5px;
        }

        .card button {
            padding: 8px 25px;
            display: block;
            margin: auto;
            border-radius: 2px;
            border: none;
            margin-top: 30px;
            background: #ff0000;
            color: white;
            font-weight: 300;
        }
        .a-btn{
            width: max-content;
            height: max-content;
            color: white;
            text-decoration: none;
        }

        .card button:hover {
            background: #fa2222;
        }
        .footer_div{
            width: 100%;
            display: flex;
            flex-direction: row;
            padding: 10px 5px 0px 5px;
            justify-content: space-between;
        }
    </style>
</head>

<body>
<?php
session_start();
/*
 Alumno: Juan F Aguilar Sanchez
 Fecha: 19/10/2022
 Finalidad: Ejercicios Tema 3 Conexion BBDD
 */
?>
<div class="card" >
    <div class="card-border-top" ></div>
    <div class="img" ><img height="100%" width="100%" src="https://cdn-icons-png.flaticon.com/512/456/456283.png"></div>
    <?php
    //Que se hace en caso de no encontrar nada almacenado. Nos redirige de vuelta al login.
    if (!isset($_SESSION["username"])){
        header("Location: index.php");
    }
    print "<span>".$_SESSION["username"]."</span>";
    print "<p class='job'>Password: ".$_SESSION["password"]."</p>";
    print "<p class='job'>Age: ".$_SESSION["age"]."</p>";
    ?>

    <a class="a-btn" href="logout.php"><button>Logout</button></a>
    <div class="footer_div">
        <a class="" href="infoSession.php">Sesion</a>
        <a class="" href="infoCookies.php">Cookies</a>
    </div>
    <div class="footer_div">
        <tr>
            <td align="center"><a href="infoCookies.php"><img src="img/idiom.jpg" width="90" height="60"></a></td>
            <td align="center"><a href="creaCookieIdioma.php?idioma=es"><img src="img/esp.png" width="90" height="60"></a></td>
            <td align="center"><a href="creaCookieIdioma.php?idioma=en"><img src="img/uk.jpg" width="90" height="60"></a></td>

        </tr>
    </div>

</div>
<!-- Animacion de introduccion Netflix -->
<div id="container">
    <!-- Edit the letter attr to: N, E, T, F, L, I or X -->

    <netflixintro letter="N">
        <div class="helper-1">
            <div class="effect-brush">
                <span class="fur-31"></span>
                <span class="fur-30"></span>
                <span class="fur-29"></span>
                <span class="fur-28"></span>
                <span class="fur-27"></span>
                <span class="fur-26"></span>
                <span class="fur-25"></span>
                <span class="fur-24"></span>
                <span class="fur-23"></span>
                <span class="fur-22"></span>
                <span class="fur-21"></span>
                <span class="fur-20"></span>
                <span class="fur-19"></span>
                <span class="fur-18"></span>
                <span class="fur-17"></span>
                <span class="fur-16"></span>
                <span class="fur-15"></span>
                <span class="fur-14"></span>
                <span class="fur-13"></span>
                <span class="fur-12"></span>
                <span class="fur-11"></span>
                <span class="fur-10"></span>
                <span class="fur-9"></span>
                <span class="fur-8"></span>
                <span class="fur-7"></span>
                <span class="fur-6"></span>
                <span class="fur-5"></span>
                <span class="fur-4"></span>
                <span class="fur-3"></span>
                <span class="fur-2"></span>
                <span class="fur-1"></span>
            </div>
            <div class="effect-lumieres">
                <span class="lamp-1"></span>
                <span class="lamp-2"></span>
                <span class="lamp-3"></span>
                <span class="lamp-4"></span>
                <span class="lamp-5"></span>
                <span class="lamp-6"></span>
                <span class="lamp-7"></span>
                <span class="lamp-8"></span>
                <span class="lamp-9"></span>
                <span class="lamp-10"></span>
                <span class="lamp-11"></span>
                <span class="lamp-12"></span>
                <span class="lamp-13"></span>
                <span class="lamp-14"></span>
                <span class="lamp-15"></span>
                <span class="lamp-16"></span>
                <span class="lamp-17"></span>
                <span class="lamp-18"></span>
                <span class="lamp-19"></span>
                <span class="lamp-20"></span>
                <span class="lamp-21"></span>
                <span class="lamp-22"></span>
                <span class="lamp-23"></span>
                <span class="lamp-24"></span>
                <span class="lamp-25"></span>
                <span class="lamp-26"></span>
                <span class="lamp-27"></span>
                <span class="lamp-28"></span>
            </div>
        </div>
        <div class="helper-2">
            <div class="effect-brush">
                <span class="fur-31"></span>
                <span class="fur-30"></span>
                <span class="fur-29"></span>
                <span class="fur-28"></span>
                <span class="fur-27"></span>
                <span class="fur-26"></span>
                <span class="fur-25"></span>
                <span class="fur-24"></span>
                <span class="fur-23"></span>
                <span class="fur-22"></span>
                <span class="fur-21"></span>
                <span class="fur-20"></span>
                <span class="fur-19"></span>
                <span class="fur-18"></span>
                <span class="fur-17"></span>
                <span class="fur-16"></span>
                <span class="fur-15"></span>
                <span class="fur-14"></span>
                <span class="fur-13"></span>
                <span class="fur-12"></span>
                <span class="fur-11"></span>
                <span class="fur-10"></span>
                <span class="fur-9"></span>
                <span class="fur-8"></span>
                <span class="fur-7"></span>
                <span class="fur-6"></span>
                <span class="fur-5"></span>
                <span class="fur-4"></span>
                <span class="fur-3"></span>
                <span class="fur-2"></span>
                <span class="fur-1"></span>
            </div>
        </div>
        <div class="helper-3">
            <div class="effect-brush">
                <span class="fur-31"></span>
                <span class="fur-30"></span>
                <span class="fur-29"></span>
                <span class="fur-28"></span>
                <span class="fur-27"></span>
                <span class="fur-26"></span>
                <span class="fur-25"></span>
                <span class="fur-24"></span>
                <span class="fur-23"></span>
                <span class="fur-22"></span>
                <span class="fur-21"></span>
                <span class="fur-20"></span>
                <span class="fur-19"></span>
                <span class="fur-18"></span>
                <span class="fur-17"></span>
                <span class="fur-16"></span>
                <span class="fur-15"></span>
                <span class="fur-14"></span>
                <span class="fur-13"></span>
                <span class="fur-12"></span>
                <span class="fur-11"></span>
                <span class="fur-10"></span>
                <span class="fur-9"></span>
                <span class="fur-8"></span>
                <span class="fur-7"></span>
                <span class="fur-6"></span>
                <span class="fur-5"></span>
                <span class="fur-4"></span>
                <span class="fur-3"></span>
                <span class="fur-2"></span>
                <span class="fur-1"></span>
            </div>
        </div>
        <div class="helper-4">
            <div class="effect-brush">
                <span class="fur-31"></span>
                <span class="fur-30"></span>
                <span class="fur-29"></span>
                <span class="fur-28"></span>
                <span class="fur-27"></span>
                <span class="fur-26"></span>
                <span class="fur-25"></span>
                <span class="fur-24"></span>
                <span class="fur-23"></span>
                <span class="fur-22"></span>
                <span class="fur-21"></span>
                <span class="fur-20"></span>
                <span class="fur-19"></span>
                <span class="fur-18"></span>
                <span class="fur-17"></span>
                <span class="fur-16"></span>
                <span class="fur-15"></span>
                <span class="fur-14"></span>
                <span class="fur-13"></span>
                <span class="fur-12"></span>
                <span class="fur-11"></span>
                <span class="fur-10"></span>
                <span class="fur-9"></span>
                <span class="fur-8"></span>
                <span class="fur-7"></span>
                <span class="fur-6"></span>
                <span class="fur-5"></span>
                <span class="fur-4"></span>
                <span class="fur-3"></span>
                <span class="fur-2"></span>
                <span class="fur-1"></span>
            </div>
        </div>
    </netflixintro>
</div>


</body>

</html>