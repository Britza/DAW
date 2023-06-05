<?php
// Conexión a la base de datos SQLite
$db = new PDO('sqlite:viajes.db');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener la información de la ciudad
    $nombre = $_POST['nombre'];
    $habitantes = $_POST['habitantes'];
    $descripcion = $_POST['descripcion'];

    // Agregar la ciudad a la base de datos
    $stmt = $db->prepare('INSERT INTO ciudades (nombre, habitantes, descripcion) VALUES (?, ?, ?)');
    $stmt->execute([$nombre, $habitantes, $descripcion]);

}
?>

<form method="post" action="agregar_ciudad.php">
  <label for="nombre">Nombre de la ciudad:</label>
  <input type="text" id="nombre" name="nombre" required>
  <br>
  <label for="habitantes">Número de habitantes:</label>
  <input type="number" id="habitantes" name="habitantes" min="0" required>
  <br>
  <label for="descripcion">Descripción de la ciudad:</label>
  <textarea id="descripcion" name="descripcion" required></textarea>
  <br>
  <input type="submit" value="Añadir ciudad">
</form>
<a href="stats.php">Regresar página principal</a>
