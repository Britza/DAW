<?php

$usuarios = json_decode(file_get_contents('C:\\Users\\Britza\\PhpstormProjects\\ExamenPractico5\\usuarios.json'), true);

if (isset($_GET['dni'])) {
    $dni = $_GET['dni'];
    $usuario = isset($usuarios[$dni]) ? : null;
    if ($usuario) {
        echo "<h1>Datos del usuario con DNI $dni</h1>";
        echo "<p>Nombre: {$usuario['nombre']}</p>";
        echo "<p>Email: {$usuario['email']}</p>";
    } else {
        echo "<h1>No se ha encontrado el usuario con DNI $dni</h1>";
    }
} else {
    echo "<h1>Listado completo de usuarios</h1>";
    echo "<div class=\"row\">";
    foreach ($usuarios as $dni => $usuario) {
        echo "<div class=\"col-md-4\">";
        echo "<h2>$dni</h2>";
        echo "<p>Nombre: {$usuario['nombre']}</p>";
        echo "<p>Email: {$usuario['email']}</p>";
        echo "</div>";
    }
    echo "</div>";
}
?>

