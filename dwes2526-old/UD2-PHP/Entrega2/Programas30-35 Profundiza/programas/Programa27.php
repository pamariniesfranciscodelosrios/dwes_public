<?php
// Programa27.php - Varios campos (nombre y apellidos)
$nombre = $_POST['nombre'] ?? '';
$apellidos = $_POST['apellidos'] ?? '';
?>
<!doctype html>
<html lang="es">
<head><meta charset="utf-8"><title>Programa27 - Nombre y apellidos</title></head>
<body>
<h1>Programa27 - POST: Nombre y Apellidos</h1>
<form method="post" action="">
  <label>Nombre: <input type="text" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>"></label><br>
  <label>Apellidos: <input type="text" name="apellidos" value="<?php echo htmlspecialchars($apellidos); ?>"></label><br>
  <button type="submit">Enviar</button>
</form>
<?php if ($nombre !== '' || $apellidos !== ''): ?>
  <p>Nombre completo: <strong><?php echo htmlspecialchars(trim($nombre.' '.$apellidos)); ?></strong></p>
<?php endif; ?>
</body>
</html>