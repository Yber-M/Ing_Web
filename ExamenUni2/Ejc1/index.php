<?php

require_once("Model/Alumno.php");

$nombre = $_POST["name"];
$notaUno = $_POST["primeraNota"];
$notaDos = $_POST["segundaNota"];
$notaTres = $_POST["terceraNota"];

$alumnos = new Alumno($nombre, $notaUno, $notaDos, $notaTres);

$calProm = $alumnos->calcularProm();
$estado = $alumnos->imprimirEstado();
$puntos = $alumnos->sumarPuntosAdicionales();
echo "<h2>Registro:<h2>";
echo "<p>Nombre :" . $nombre . "</p>";
echo "<p> Promedio : " . $calProm . "</p>";
echo $puntos;
echo $estado;
