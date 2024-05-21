<?php

class Operacion {
    public $n1 = 0;
    public $n2 = 0;
    public $resultado = 0;

    //* Constructor
    public function __construct($n1, $n2) {
        $this->n1 = $n1;
        $this->n2 = $n2;
    }

    //* Métodos GET
    public function getSumar() {
        $this -> resultado = $this -> n1 + $this -> n2;
        return $this -> resultado;
    }

    public function getRestar() {
        $this -> resultado = $this -> n1 - $this -> n2;
        return $this -> resultado;
    }

    public function getMultiplicar() {
        $this -> resultado = $this -> n1 * $this -> n2;
        return $this -> resultado;
    }

    public function getDividir() {
        $this -> resultado = $this -> n1 / $this -> n2;
        return $this -> resultado;
    }

}
