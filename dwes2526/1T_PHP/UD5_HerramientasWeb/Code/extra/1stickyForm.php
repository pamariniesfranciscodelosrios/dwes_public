<?php
// Verifica si el formulario ha sido enviado y si los campos 'nombre' y 'modulos' no están vacíos
if (!empty($_POST['modulos']) && !empty($_POST['nombre'])) {

    // Si los datos son correctos, se procesan y se muestran
    echo "<h2>Datos enviados correctamente:</h2>";
    echo "<p><strong>Nombre del alumno:</strong> " . htmlspecialchars($_POST['nombre']) . "</p>";
    echo "<p><strong>Módulos seleccionados:</strong></p>";
    echo "<ul>";

    // Recorre e imprime cada módulo seleccionado
    foreach ($_POST['modulos'] as $modulo) {
        echo "<li>" . htmlspecialchars($modulo) . "</li>";
    }
    echo "</ul>";

} else {
    // Si no se ha enviado el formulario o faltan datos, genera el formulario
    
    // Recupera los valores enviados previamente para mantenerlos en el formulario (Sticky Form)
    $nombre = $_POST['nombre'] ?? "";       // Recupera el nombre si existe, si no, lo deja vacío
    $modulos = $_POST['modulos'] ?? [];     // Recupera los módulos seleccionados como array, si no, lo deja vacío
    ?>

    <!-- Formulario HTML -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <p>
            <label for="nombre">Nombre del alumno:</label>
            <!-- El valor del campo de texto se conserva después del envío -->
            <input type="text" name="nombre" id="nombre" value="<?= htmlspecialchars($nombre) ?>" />
        </p>
        <p>
            <!-- Checkbox para el módulo DWES -->
            <input type="checkbox" name="modulos[]" id="modulosDWES" value="DWES"
            <?php if (in_array("DWES", $modulos)) echo 'checked="checked"'; ?> />
            <label for="modulosDWES">Desarrollo web en entorno servidor</label>
        </p>
        <p>
            <!-- Checkbox para el módulo DWEC -->
            <input type="checkbox" name="modulos[]" id="modulosDWEC" value="DWEC"
            <?php if (in_array("DWEC", $modulos)) echo 'checked="checked"'; ?> />
            <label for="modulosDWEC">Desarrollo web en entorno cliente</label>
        </p>
        <input type="submit" value="Enviar" name="enviar" />
    </form>

<?php 
}
?>
