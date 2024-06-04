<?php
require_once("../Model/Trabajador.php");

$nombre = $_POST["name"];
$horasTrabajada = $_POST["horasTrabajada"];

$trabajadores = new Trabajador($nombre, $horasTrabajada);

$calcularHoras = $trabajadores->calcularHoras();
$calcularSalarios = $trabajadores->calcularSalario();
echo "<h1>Calculando salario del trabajador : " . $nombre . "</h1>";
echo $calcularHoras;
echo $calcularSalarios;