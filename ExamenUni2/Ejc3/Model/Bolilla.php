<?php

class Bolilla
{
    public $color;
    public $montoCompra;
    public $descuento;

    public function __construct($color, $montoCompra)
    {
        $this->color = $color;
        $this->montoCompra = $montoCompra;
        $this->descuento = $this->calcularDescuento();
    }

    public function calcularDescuento()
    {
        switch ($this->color) {
            case 'Blanca':
                return 0;
            case 'Amarilla':
                return 25;
            case 'Naranja':
                return 50;
            case 'Azul':
                return 75;
            case 'Roja':
                return 100;
            default:
                return 0;
        }
    }

    public function montoDescuento()
    {
        return ($this->descuento / 100) * $this->montoCompra;
    }

    public function nuevoMonto()
    {
        return $this->montoCompra - $this->montoDescuento();
    }
}
?>
