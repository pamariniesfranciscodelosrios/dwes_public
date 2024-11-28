<html>

<body style="text-align:center; background-color:azure">
    <h2>Registro Moodle Centros:</h2>
    <?php
    //Creamos la función format dar formatos a los datos de todos los campos
    function format($datos)
    {
        $datos = strtoupper($datos); // Transforma una cadena de caracteres a mayúsculas
        $datos = trim($datos); // Elimina espacios antes y después de una cadena
        $datos = stripslashes($datos); // Elimina backslashes o barra invertida \
        $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML para evitar la entrada de caracteres extraños.
        return $datos;
    }

    if (isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
        // El nombre es bligatorio
        if (empty($_POST["nombre"])) {
            $errores[] = "El nombre y apellidos es requerido";
        } // La edad debe de tener 2 digitos y no puede ser menor de 18 años
        if (empty($_POST["edad"]) || strlen($_POST["edad"]) > 2 || $_POST['edad'] < 18) {
            $errores[] = "La edad es requerida,no puede de ser mayor 2 digitos y debes de tener al menos 18 años";
        }
        // El sexo es obligatorio
        if (empty($_POST["sexo"])) {
            $errores[] = "No se ha indicado ningún tipo de sexo";
        }
        // El email es obligatorio y ha de tener formato adecuado
        // filter_var — Filtra una variable con el filtro que se indique en este caso FILTER_VALIDATE_EMAIL que corresponde al email
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) || empty($_POST["email"])) {
            $errores[] = "No se ha indicado email o el formato no es correcto";
        }

        // El telefono es obigatorio
        if (empty($_POST["telefono"])) {
            $errores[] = "No se ha indicado el telefono";
        }

        // La direccion es obligatoria
        if (empty($_POST["direccion"])) {
            $errores[] = "No se ha indicado la direccion";
        }
        

        // Si el array $errores está vacío, se aceptan los datos y se asignan a variables
        if (empty($errores)) {
            $nombre = format($_POST["nombre"]);
            $edad = format($_POST["edad"]);
            $estudios = format($_POST["estudios"]);
            $sexo = format($_POST["sexo"]);
            // Utilizamos implode para pasar el array a string, utilizando el separador , para concatenar los valores
            $lenguajes = format(implode(", ", $_POST["lenguajes"]));
            $email = format($_POST["email"]);
            $telefono = format($_POST['telefono']);
            $direccion = format($_POST["direccion"]);
            echo "Datos introducidos correctamente: <br>";
            echo "Nombre y Apellidos: " . $nombre;
            echo "<br>";
            echo "Edad: " . $edad;
            echo "<br>";
            echo "Sexo: " . $sexo;
            echo "<br>";
            echo "Estudios: " . $estudios;
            echo "<br>";
            echo "Lenguajes: " . $lenguajes;
            echo "<br>";
            echo "Email: " . $email;
            echo "<br>";
            echo "Telefono: " . $telefono;
            //Utilizamos la función wordwrap para ajustar una cadena,añadiendo un salto de linea segun los caracteres que le indiquemos.
            //Devolviendo la cadena ya ajustada
            echo "Direccion: " . wordwrap($direccion, 50, "<br>", true);;
            echo "<br>";
        }
    }
    //Si hay errores recorremos el array lo mostramos por pantalla
    if (isset($errores)) {
        echo "El formulario contiene los siguientes errores: <br>";
        foreach ($errores as $error) {
            echo "<span style='color:red'><li> $error </li></span>";
        }
    }

    ?>
    <form id="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" style="display:inline-block ; margin-bottom: 10px; padding:10px; text-align:left; background: lightblue; border: 1px solid; border-color:black align:center;">
        <br>
        Nombre y Apellidos:
        <input type="text" name="nombre" maxlength="50"><br><br>
        Edad:
        <input type="number" name="edad" maxlength="2"><br><br>
        Sexo:
        <input type="radio" name="sexo" value="masculino">Masculino</input>
        <input type="radio" name="sexo" value="femenino">Femenino</input>
        <input type="radio" name="sexo" value="otro">Otro</input><br><br>
        Estudios:
        <select name="estudios">
            <option value="sin estudios">Sin estudios</option>
            <option value="educacion obligatoria" selected="selected">Educación Obligatoria</option>
            <option value="formacion profesional">Formación profesional</option>
            <option value="universidad">Universidad</option>
        </select> <br><br>
        Conocimiento en lenguajes:
        <input type="checkbox" name="lenguajes[]" value="php" checked="checked">PHP</input>
        <input type="checkbox" name="lenguajes[]" value="java">Java</input>
        <input type="checkbox" name="lenguajes[]" value="python">Python</input>
        <input type="checkbox" name="lenguajes[]" value="C#">C#</input><br><br>
        Teléfono:
        <input type="number" name="telefono" maxlength="9"><br><br>
        Email:
        <input type="text" name="email"><br><br>
        Dirección:
        <textarea name="direccion" form="form" rows="4" cols="40" maxlength="150" placeholder="Máximo 150 caracteres"></textarea><br><br>
        <input type="submit" name="submit" value="Enviar" style="display:inline-block; margin-left:45%; margin-right:50%;">
    </form>
    <p><a href="index.php">Pulse</a> para volver al login</p>


</body>

</html>