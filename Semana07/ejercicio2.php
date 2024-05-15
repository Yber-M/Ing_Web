<?php

$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];

$prom = ($nota1 + $nota2 + $nota3) / 3;

echo "<h1>RESULTADO<h1>";
echo "<p>El promedio es: $prom <p>";

if ($prom >= 13) {
    echo '<p>Estado del alumno: APROBADO<p>';
} else {
    echo '<p>Estado del alumno: DESAPROBADO<p>';
}

echo "<button><a href='index.html'>VOLVER</a></button>";
