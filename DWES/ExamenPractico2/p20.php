<?php
function valida_matricula($s) {
    return preg_match('/^[0-9]{4}[A-Z]{3}[0-9]{2}$/', $s) === 1;
}
echo valida_matricula("1234ABC");

?>
