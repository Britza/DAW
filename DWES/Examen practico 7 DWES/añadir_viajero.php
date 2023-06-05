<?php
// Conexión a la base de datos SQLite
$db = new PDO('sqlite:viajes.db');

// Comprobar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Obtener los datos del formulario
  $nombre = $_POST['nombre'];
  $fecha_nacimiento = $_POST['fecha_nacimiento'];
  $nacionalidad = $_POST['nacionalidad'];
  $residencia = $_POST['residencia'];

  // Insertar el viajero en la base de datos
  $stmt = $db->prepare('INSERT INTO viajeros (nombre, fecha_nacimiento, nacionalidad, residencia) VALUES (?, ?, ?, ?)');
  $stmt->execute([$nombre, $fecha_nacimiento, $nacionalidad, $residencia]);
}
?>

<form method="post">
  <label>Nombre:</label>
  <input type="text" name="nombre" required>
  <br>
  <label>Fecha de nacimiento:</label>
  <input type="date" name="fecha_nacimiento" required>
  <br>
  <label>Nacionalidad:</label>
  <input type="text" name="nacionalidad" required>
  <br>
  <label>Residencia:</label>
  <input type="text" name="residencia" required>
  <br>
  <input type="submit" value="Añadir">
</form>
<a href="stats.php">Regresar página principal</a>