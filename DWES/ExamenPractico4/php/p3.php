<?php
if (isset($_COOKIE['color'])) {
    $color = $_COOKIE['color'];
    echo "<p style='color:$color'>Texto en $color</p>";
} else {
    echo "<form method='post'>
            <label for='color'>Selecciona tu color preferido:</label>
            <select name='color' id='color'>
                <option value='red'>Rojo</option>
                <option value='blue'>Azul</option>
                <option value='green'>Verde</option>
            </select>
            <button type='submit'>Guardar</button>
        </form>";
}

if (isset($_POST['color'])) {
    $color = $_POST['color'];
    setcookie('color', $color, time() + 3600);
    echo "<p style='color:$color'>Texto en $color</p>";
}

if (isset($_COOKIE['color'])) {
    echo "<form method='post'>
            <button type='submit' name='borrar'>Borrar selección</button>
        </form>";
}

if (isset($_POST['borrar'])) {
    setcookie('color', '', time() - 3600);
    header('Location: p3.php');
}
?>


