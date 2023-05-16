<!-- Solo me funciona dandole al boton de recargar pagina, no logro hacerlo bien -->

<?php
session_start();

if (isset($_SESSION['visitas'])) {
    $_SESSION['visitas']++;
} else {
    $_SESSION['visitas'] = 1;
}

echo "Número de visitas: " . $_SESSION['visitas'];

?>

<form action="logout.php" method="post">
    <input type="submit" value="Cerrar sesión">
</form>

<?php
exit();
?>

