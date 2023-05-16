<?php

namespace vehiculos;

class Vehiculos
{
    private $matr;
    private $edad;

    public function __construct($matr, $edad) {
        $this->matr = $matr;
        $this->edad = $edad;
    }

    public function ver() {
        echo "El vehículo con matrícula $this->matr tiene una antigüedad de $this->edad años";
    }

    public function actualizar_matricula($matr) {
        $this->matr = $matr;
    }

    public function ver_completo() {
        var_dump($this);
    }
}