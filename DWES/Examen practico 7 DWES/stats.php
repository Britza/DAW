<?php
// Conexión a la base de datos SQLite
$db = new PDO('sqlite:viajes.db');

// Consulta para obtener todos los viajeros y viajes registrados
$consulta_viajeros = $db->query('SELECT * FROM viajeros');
$consulta_viajes = $db->query('SELECT * FROM vuelos');

// Obtener el número de viajeros y viajes registrados
$num_viajeros = $consulta_viajeros->rowCount();
$num_viajes = $consulta_viajes->rowCount();

// Consulta para obtener el viajero de menor edad
$consulta_menor_edad = $db->query('SELECT * FROM viajeros ORDER BY fecha_nacimiento ASC LIMIT 1');
$viajero_menor_edad = $consulta_menor_edad->fetch();

// Consulta para obtener el número de viajes según el origen de datos
$consulta_origen = $db->query('SELECT origen, COUNT(*) as num_viajes FROM vuelos GROUP BY origen');

// Mostrar los resultados
echo '<h1>Viajeros registrados</h1>';
foreach ($consulta_viajeros as $viajero) {
  echo '<p>' . $viajero['nombre'] . ' (' . $viajero['fecha_nacimiento'] . ')</p>';
}

echo '<h1>Viajes registrados</h1>';
foreach ($consulta_viajes as $viaje) {
  echo '<p>' . $viaje['id_viajero'] . ' (' . $viaje['origen'] . ' - ' . $viaje['destino'] . ')</p>';
}

echo '<p>Número de viajeros registrados: ' . $num_viajeros . '</p>';
echo '<p>Número de viajes registrados: ' . $num_viajes . '</p>';

echo '<p>El viajero de menor edad es ' . $viajero_menor_edad['nombre'] . ' (' . $viajero_menor_edad['fecha_nacimiento'] . ')</p>';

echo '<h1>Viajes según el origen de datos</h1>';
foreach ($consulta_origen as $origen) {
  echo '<p>' . $origen['origen'] . ': ' . $origen['num_viajes'] . '</p>';
}

?>

<form method="get" action="añadir_viajero.php">
  <input type="submit" value="Añadir viajero">
</form>
<form method="get" action="añadir_vuelo.php">
  <input type="submit" value="Añadir vuelo"></input>
</form>
<form method="get" action="añadir_ciudades.php">
  <input type="submit" value="Añadir ciudad"></input>
</form>

<form method="get" action="actualizar_viajero.php">
  <label>Id del viajero:</label>
  <input type="text" name="id" required>
  <br>
  <input type="submit" value="Actualizar">
</form>

<form method="get" action="borrar.php">
  <label>Nombre de la tabla:</label>
  <input type="text" name="tabla" required>
  <br>
  <label>Id del registro:</label>
  <input type="text" name="id" required>
  <br>
  <input type="submit" value="Borrar">
</form>