<?php
include '../templates/header.php';
include '../templates/menu.php';

if (isset($_COOKIE['color'])) {
    // Si el usuario tiene un color seleccionado, mostrar un texto en su color preferido
    $color = $_COOKIE['color'];
    echo '<p style="color: ' . $color . '">Este es tu color preferido.</p>';
} else {
    // Si el usuario no tiene un color seleccionado, mostrar un formulario para que lo seleccione
    echo '<form method="post">';
    echo '<label for="color">Selecciona tu color preferido:</label>';
    echo '<select name="color" id="color">';
    echo '<option value="red">Rojo</option>';
    echo '<option value="blue">Azul</option>';
    echo '<option value="green">Verde</option>';
    echo '</select>';
    echo '<button type="submit">Guardar</button>';
    echo '</form>';
}

if (isset($_POST['color'])) {
    // Si el usuario ha seleccionado un color, guardar la selección en una cookie
    $color = $_POST['color'];
    setcookie('color', $color, time() + 3600); // La cookie expira en una hora
    header('Location: p3.php'); // Redirigir para evitar el reenvío del formulario
    exit;
}

if (isset($_COOKIE['color'])) {
    // Mostrar un botón para borrar la selección
    echo '<form method="post">';
    echo '<input type="hidden" name="borrar" value="1">';
    echo '<button type="submit">Borrar selección</button>';
    echo '</form>';
}

if (isset($_POST['borrar'])) {
    // Si el usuario ha pulsado el botón de borrar, eliminar la cookie
    setcookie('color', '', time() - 3600); // La cookie expira en el pasado
    header('Location: p3.php'); // Redirigir para evitar el reenvío del formulario
    exit;
}
include '../templates/footer.php';

?>

