<?php
function validar_nombre($nombre) {
    if (preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ ]+$/', $nombre)) {
        return true;
    } else {
        return false;
    }
}

function validar_apellidos($apellidos) {
    if (preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ ]+$/', $apellidos)) {
        return true;
    } else {
        return false;
    }
}

function validar_email($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

function validar_telefono($telefono) {
    if (preg_match('/^[0-9]+$/', $telefono)) {
        return true;
    } else {
        return false;
    }
}
?>

