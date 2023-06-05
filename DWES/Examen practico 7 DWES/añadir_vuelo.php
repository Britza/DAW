<?php
// Conexión a la base de datos SQLite
$db = new PDO('sqlite:viajes.db');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener la información del vuelo
    $id_viajero = $_POST['id_viajero'];
    $origen = $_POST['origen'];
    $destino = $_POST['destino'];
    $fecha_salida = $_POST['fecha_salida'];
    $fecha_llegada = $_POST['fecha_llegada'];
  
    // Agregar el vuelo a la base de datos
    $stmt = $db->prepare('INSERT INTO vuelos (id_viajero, origen, destino, fecha_salida, fecha_llegada) VALUES (?, ?, ?, ?, ?)');
    $stmt->execute([$id_viajero, $origen, $destino, $fecha_salida, $fecha_llegada]);
  }



?>

<form method="post" action="agregar_vuelo.php">
  <label for="id_viajero">ID del viajero:</label>
  <input type="text" id="id_viajero" name="id_viajero" required>
  <br>
  <label for="origen">Origen:</label>
  <input type="text" id="origen" name="origen" required>
  <br>
  <label for="destino">Destino:</label>
  <input type="text" id="destino" name="destino" required>
  <br>
  <label for="fecha_salida">Fecha de salida:</label>
  <input type="datetime-local" id="fecha_salida" name="fecha_salida" required>
  <br>
  <label for="fecha_llegada">Fecha de llegada:</label>
  <input type="datetime-local" id="fecha_llegada" name="fecha_llegada" required>
  <br>
  <input type="submit" value="Añadir vuelo">
</form>
<a href="stats.php">Regresar página principal</a>