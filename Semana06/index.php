<?php

$nombre = "Marlon Yber";

$entrada = "";

$espacio = "<br><br>";

echo "<button type='button'>Hola Soy Un Botón</button>";
echo "<center><h1>Welcome to " . $nombre . "</h1></center>";
echo "<hr>";
echo "<br>";

$n1 = 15;
$n2 = 10;
$n3 = 20;
$total = $n1 + $n2;

echo "La suma de " . $n1 . " + " . $n2 . " es: " . $total;

echo $espacio;
echo "<hr>";

$prom = ($n1 + $n2 + $n3) / 3;

echo "<br>";
echo "El promedio final es = " . $prom;

echo $espacio;


if ($prom > 13) {
    echo " ALUMNO APROBADO! :D";
} else {
    echo " DESAPROBASTE :(";
}

echo $espacio;
echo "<hr>";
