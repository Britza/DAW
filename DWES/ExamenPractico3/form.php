
<?php
require_once 'validacion.php';
$errores = array();

if (!validar_nombre($_POST['nombre'])) {
  $errores[] = 'El campo Nombre es obligatorio.';
}

if (!validar_apellidos($_POST['apellidos'])) {
  $errores[] = 'El campo de apellidos no debe ser un número.';
}

if (!validar_email($_POST['email'])) {
  $errores[] = 'El campo Correo electrónico no es válido.';
}
if (!validar_telefono($_POST['telefono'])) {
  $errores[] = 'El campo de telefono no es valido.';
}

if (count($errores) > 0) {
  echo '<ul>';
  foreach ($errores as $error) {
    echo '<li>' . $error . '</li>';
  }
  echo '</ul>';
} else {
  // Mostrar el justificante de recepción
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Justificante de recepción</title>
</head>
<body>
  <h1>Justificante de recepción</h1>
  <p>Nombre: <?php echo $_POST['nombre']; ?></p>
<p>Apellidos: <?php echo $_POST['apellidos']; ?></p>
<p>Email: <?php echo $_POST['email']; ?></p>
<p>Teléfono: <?php echo $_POST['telefono']; ?></p>
<p>Archivo: <?php echo $_FILES['archivo']['name']; ?></p>
</body>
</html>




