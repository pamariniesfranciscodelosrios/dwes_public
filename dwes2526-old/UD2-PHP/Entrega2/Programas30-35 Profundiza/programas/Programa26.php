<?php
// Programa26.php - Formulario simple con POST (nombre)
$nombre = $_POST['nombre'] ?? '';
?>
<!doctype html>
<html lang="es">
<head><meta charset="utf-8"><title>Programa26 - POST</title></head>
<body>
<h1>Programa26 - POST: Hola nombre</h1>
<form method="post" action="">
  <label>Nombre: <input type="text" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>"></label>
  <button type="submit">Enviar</button>
</form>
<?php if ($nombre !== ''): ?>
  <p>Hola, <strong><?php echo htmlspecialchars($nombre); ?></strong></p>
<?php endif; ?>
</body>
</html>