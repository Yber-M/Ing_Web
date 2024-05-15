<?php

$num1_ejc3 = $_POST['num1_ejc3'];
$num2_ejc3 = $_POST['num2_ejc3'];
$num3_ejc3 = $_POST['num3_ejc3'];

$maximo = max($num1_ejc3, $num2_ejc3, $num3_ejc3);

echo "<h1>RESULTADO<h1>";
echo "<p>El número mayor de los ingresados es : $maximo <p>";

echo "<button><a href='index.html'>VOLVER</a></button>";
