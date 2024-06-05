<?php
require_once("../Model/Bolilla.php");

$colorBolilla = $_POST["colorBolilla"];

$bolilla = new Bolilla($colorBolilla);
$asignarPrecios = $bolilla->AsignarPrecio();
$calcularDscts = $bolilla->calcularDsct();
$mostrarDscts = $bolilla->imprimiDsct();

$montoTotal = $asignarPrecios - $calcularDscts;

echo "<h1>Monto de la bolilla: S/" . $asignarPrecios . "</h1>";
echo "<h1>Bolilla elegida: " . $colorBolilla . "</h1>";


switch ($colorBolilla) {
    case 'Blanca':
        echo "<h1>Descuento: " . $mostrarDscts . "</h1>";
        echo "<h1>Monto a cancelar: S/" . $asignarPrecios . "</h1>";
        break;
    case 'Amarilla':
        echo "<h1>Descuento: " . $mostrarDscts . "</h1>";
        echo "<h1>Monto del descuento que se realizará: S/" . $calcularDscts . "</h1>";
        echo "<h1>Monto a cancelar: S/" . $montoTotal . "</h1>";
        break;
    case 'Naranja':
        echo "<h1>Descuento: " . $mostrarDscts . "</h1>";
        echo "<h1>Monto del descuento que se realizará: S/" . $calcularDscts . "</h1>";
        echo "<h1>Monto a cancelar: S/" . $montoTotal . "</h1>";
        break;
    case 'Azul':
        echo "<h1>Descuento: " . $mostrarDscts . "</h1>";
        echo "<h1>Monto del descuento que se realizará: S/" . $calcularDscts . "</h1>";
        echo "<h1>Monto a cancelar: S/" . $montoTotal . "</h1>";
        break;
    case 'Roja':
        echo "<h1>Descuento: " . $mostrarDscts . "</h1>";
        echo "<h1>Monto del descuento que se realizará: S/" . $calcularDscts . "</h1>";
        echo "<h1>Monto a cancelar: S/" . $montoTotal . "</h1>";
        break;
}
