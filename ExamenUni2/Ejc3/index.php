<?php

require_once("Model/Bolilla.php");

$montoCompra = $_POST["montoCompra"];
$colorBolilla = $_POST["colorBolilla"];

$bolilla = new Bolilla($colorBolilla, $montoCompra);

$descuento = $bolilla->descuento;
$montoDescuento = $bolilla->montoDescuento();
$nuevoMonto = $bolilla->nuevoMonto();

echo "<h2>Detalle de la compra:</h2>";
echo "<p>Monto Total de la Compra: S/." . $montoCompra . "</p>";
echo "<p>Bolilla Elegida: " . $colorBolilla . "</p>";
echo "<p>Descuento Aplicado: " . $descuento . "%</p>";
echo "<p>Monto de Descuento: S/." . $montoDescuento . "</p>";
echo "<p>Nuevo Monto a Cancelar: S/." . $nuevoMonto . "</p>";
