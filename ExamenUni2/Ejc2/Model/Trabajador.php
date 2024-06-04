<?php

class Trabajador
{
    public $horasTrabajadas;
    public $tarifaHora = 35;

    public function __construct($horas)
    {
        $this->horasTrabajadas = $horas;
    }

    public function calcularSalarioSinExtras()
    {
        if ($this->horasTrabajadas > 40) {
            return 40 * $this->tarifaHora;
        } else {
            return $this->horasTrabajadas * $this->tarifaHora;
        }
    }

    public function calcularHorasExtras()
    {
        if ($this->horasTrabajadas > 40) {
            return $this->horasTrabajadas - 40;
        } else {
            return 0;
        }
    }

    public function calcularSalarioConExtras()
    {
        $horasExtras = $this->calcularHorasExtras();
        return $this->calcularSalarioSinExtras() + ($horasExtras * $this->tarifaHora * 2);
    }
}
?>
