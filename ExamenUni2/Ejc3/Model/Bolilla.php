<?php

class Bolilla
{
    public $color = "";
    public $precio = 0;
    public $precioDsct = 0;
    public $mostrarDsct = "";
    public function __construct($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function AsignarPrecio()
    {
        switch ($this->color) {
            case 'Blanca':
                $this->precio = 10;
                break;
            case 'Amarilla':
                $this->precio = 20;
                break;

            case 'Naranja':
                $this->precio = 25;
                break;

            case 'Azul':
                $this->precio = 30;
                break;
            case 'Roja':
                $this->precio = 50;
                break;

            default:
                $this->precio = 0;
                break;
        }
        return $this->precio;
    }
    public function imprimiDsct()
    {
        switch ($this->color) {
            case 'Blanca':
                $this->mostrarDsct = "Sin descuento";
                break;
            case 'Amarilla':
                $this->mostrarDsct = "25% de dsct.";
                break;
            case 'Naranja':
                $this->mostrarDsct = "50% de dsct.";
                break;
            case 'Azul':
                $this->mostrarDsct = "75% de dsct.";
                break;
            case 'Roja':
                $this->mostrarDsct = "100% de dsct.";
                break;
            default:
                $this->mostrarDsct = "Sin descuento";
                break;
        }
        return $this->mostrarDsct;
    }

    public function calcularDsct()
    {
        $this->AsignarPrecio();

        switch ($this->color) {
            case 'Blanca':
                $this->precioDsct = $this->precio;
                break;
            case 'Amarilla':
                $this->precioDsct = $this->precio * 0.25;
                break;
            case 'Naranja':
                $this->precioDsct = $this->precio * 0.5;
                break;
            case 'Azul':
                $this->precioDsct = $this->precio * 0.75;
                break;
            case 'Roja':
                $this->precioDsct = $this->precio * 1.00;
                break;
            default:
                $this->precioDsct = 0;
                break;
        }
        return $this->precioDsct;
    }
}
