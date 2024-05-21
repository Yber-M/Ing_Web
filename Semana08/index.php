<?php

// ? 
require_once("model/clsOperaciones.php");

$num1 = 14;
$num2 = 20;
$espacio = "<br><br>";

$Operaciones = new Operacion($num1, $num2);

//* SUMAR(+)
$totalSum = $Operaciones->getSumar();
echo "<h2>SUMAR(+)</h2>";
echo $num1 . " + " . $num2 . " = " . $totalSum . $espacio;

//* RESTAR(-)
echo "<h2>RESTAR(-)</h2>";
$totalResta = $Operaciones->getRestar();
echo $num1 . " - " . $num2 . " = " . $totalSum . $espacio;

//*  MULTIPLICAR(*)
echo "<h2>MULTIPLICAR(*)</h2>";
$totalMulti = $Operaciones->getMultiplicar();
echo $num1 . " * " . $num2 . " = " . $totalSum . $espacio;

//*  DIVIDIR(/)
echo "<h2>DIVIDIR(/)</h2>";
$totalMulti = $Operaciones->getDividir();
echo $num1 . " / " . $num2 . " = " . $totalSum . $espacio;