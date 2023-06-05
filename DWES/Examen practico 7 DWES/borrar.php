<?php
// Conexión a la base de datos SQLite
$db = new PDO('sqlite:viajes.db');

// Obtener el nombre de la tabla y el id del registro a borrar
$tabla = $_GET['tabla'];
$id = $_GET['id'];

// Eliminar el registro de la base de datos
$stmt = $db->prepare("DELETE FROM $tabla WHERE id = ?");
$stmt->execute([$id]);
?>

<p>Ha sido borrado</p>
<a href="stats.php">Regresar página principal</a>