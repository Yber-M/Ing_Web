<?php

$name = "Marlon Yber";
$apell = "Quispe Olano";
$edad = "19 años";
$carrera = "Ingeniería de Sistemas";
$ciclo = "6to Ciclo";
$talla = "1.78cm";

$espacio = "<br><br>";

$cadenatexto = "Nombres : " . $name . $espacio .
    "Apellidos : " . $apell . $espacio .
    "Edad : " . $edad . $espacio .
    "Carrera : " . $carrera . $espacio .
    "Ciclo : " . $ciclo . $espacio .
    "Talla : " . $talla;

echo "<center><h1 style='color: red;  margin: 1.5rem;'>REGISTRO ALUMNO</h1>";
echo "<hr>";
echo "<div style='margin: 1.5rem;'>" . $cadenatexto . "</div></center>";
