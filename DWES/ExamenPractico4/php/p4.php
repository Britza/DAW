<?php
include '../templates/header.php';
include '../templates/menu.php';

session_start();

if (!isset($_COOKIE['visitas'])) {
    // Si la cookie no está definida, establecerla a 1
    setcookie('visitas', 1, time() + 3600); // La cookie expira en una hora
    $visitas = 1;
} else {
    // Si la cookie está definida, incrementar su valor en 1
    $visitas = $_COOKIE['visitas'] + 1;
    setcookie('visitas', $visitas, time() + 3600); // La cookie expira en una hora
}

echo '<p>Número de visitas: ' . $visitas . '</p>';

echo '<form method="post">';
echo '<input type="hidden" name="borrar" value="1">';
echo '<button type="submit">Cerrar sesión</button>';
echo '</form>';

if (isset($_POST['borrar'])) {
    // Si el usuario ha pulsado el botón de cerrar sesión, eliminar la cookie
    setcookie('visitas', '', time() - 3600); // La cookie expira en el pasado
    header('Location: p4.php'); // Redirigir para evitar el reenvío del formulario
    exit;
}

include '../templates/footer.php';
?>

