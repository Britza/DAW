<?php
function valida_email($s) {

    return filter_var($s, FILTER_VALIDATE_EMAIL) !== False;

}
echo valida_email("usuario@dominio.com");

?>
