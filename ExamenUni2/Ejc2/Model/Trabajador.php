<?php

class Trabajador
{
    public $name = "";
    public $salario = 0.0;
    public $salarioHorasExtras = 0.0;
    public $horaTrabajada = 0;
    public $tarifaXhora = 35;
    public $horasExtras = 0;
    public function __construct($nombre, $horaTrabajada)
    {
        $this->name = $nombre;
        $this->horaTrabajada = $horaTrabajada;
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function getHoraTrabajada()
    {
        return $this->horaTrabajada;
    }

    public function calcularHoras()
    {
        if ($this->horaTrabajada > 40) {
            $this->horasExtras = $this->horaTrabajada - 40;
            return "<h2>Horas Trabajadas: " . $this->horaTrabajada . " <h2>" . "<h2> Horas Extras Trabajadas: " . $this->horasExtras . "</h2>";
        } else {
            return "<h3> Horas Trabajadas:" . $this->horaTrabajada . "</h3>";
        }
    }

    public function calcularSalario()
    {
        $this->calcularHoras();
        if ($this->horaTrabajada > 40) {
            return "<h1>Sueldo sin horas extras: S/" . $this->salario = $this->horaTrabajada * $this->tarifaXhora . 
            "</h1><h1> Sueldo con horas extras: S/" . $this->salario = $this->horaTrabajada * ($this->tarifaXhora * 2) . "</h1>";
        } else {
            return "<h1>Sueldo: S/" . $this->salario = $this->horaTrabajada * $this->tarifaXhora . "</h1>";
        }
    }
}
