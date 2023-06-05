<?php
// Conexión a la base de datos SQLite
$db = new PDO('sqlite:viajes.db');

// Obtener el id del usuario a actualizar
$id = $_GET['id'];

// Obtener los datos actuales del usuario
$stmt = $db->prepare('SELECT * FROM viajeros WHERE id = ?');
$stmt->execute([$id]);
$viajero = $stmt->fetch();

// Comprobar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Obtener los datos del formulario
  $nombre = $_POST['nombre'];
  $fecha_nacimiento = $_POST['fecha_nacimiento'];
  $nacionalidad = $_POST['nacionalidad'];
  $residencia = $_POST['residencia'];

  // Actualizar los datos del usuario en la base de datos
  $stmt = $db->prepare('UPDATE viajeros SET nombre = ?, fecha_nacimiento = ?, nacionalidad = ?, residencia = ? WHERE id = ?');
  $stmt->execute([$nombre, $fecha_nacimiento, $nacionalidad, $residencia, $id]);
}
?>

<form method="post">
  <label>Nombre:</label>
  <input type="text" name="nombre" value="<?php echo $viajero['nombre']; ?>" required>
  <br>
  <label>Fecha de nacimiento:</label>
  <input type="date" name="fecha_nacimiento" value="<?php echo $viajero['fecha_nacimiento']; ?>" required>
  <br>
  <label>Nacionalidad:</label>
  <input type="text" name="nacionalidad" value="<?php echo $viajero['nacionalidad']; ?>" required>
  <br>
  <label>Residencia:</label>
  <input type="text" name="residencia" value="<?php echo $viajero['residencia']; ?>" required>
  <br>
  <input type="submit" value="Actualizar">
</form>
<a href="stats.php">Regresar página principal</a>