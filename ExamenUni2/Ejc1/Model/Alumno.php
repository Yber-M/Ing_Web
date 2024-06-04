<?php

class Alumno
{
    public $nombres = "";
    public $nota1 = 0;
    public $nota2 = 0;
    public $nota3 = 0;

    public $puntosAdicionales = 0;

    public $promedio = 0;

    public $promedioTotal = 0;
    public function __construct($nom, $not1, $not2, $not3)
    {
        $this->nombres = $nom;
        $this->nota1 = $not1;
        $this->nota2 = $not2;
        $this->nota3 = $not3;
    }

    function getNombres()
    {
        return $this->nombres;
    }
    function getNota1()
    {
        return $this->nota1;
    }
    function getNota2()
    {
        return $this->nota2;
    }
    function getNota3()
    {
        return $this->nota3;
    }

    function calcularProm()
    {
        $this->promedio = ($this->nota1 + $this->nota2 + $this->nota3) / 3;
        return $this->promedio;
    }

    function imprimirEstado()
    {
        $this->calcularProm();
        if ($this->promedio >= 13) {
            return "<h1>Estado: Aprobado!<h1>";
        } else {
            return "<h1>Estado: Desaprobado:(<h1>";
        }
    }
    function sumarPuntosAdicionales() {
        $this->calcularProm();
        if ($this->promedio >= 15 && $this->promedio < 19) {
            $this->puntosAdicionales = 2;
            $this->promedioTotal = $this->promedio + $this->puntosAdicionales;
            return "<p>Puntos Adicionales: 2</p><br>" . 
            "<p>Promedio Total: " . $this->promedioTotal . "</p>";
        } else {
            return "<h1>Sin Puntos Adicionales<p>psdt: Creo que si se manejan notas de 0 al 20 seria algo ilógico que se sumen puntos si el promedio es de 19 o 20. Ya que de promedio saldría 22. Es por ello que lo estoy haciendo así. Solo se sumara puntos si el promedio es 18<p><h1>";
        }
    }
}
