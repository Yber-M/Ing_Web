<?php

require_once("Model/Trabajador.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $horasTrabajadas = $_POST["horas"];
    $trabajador = new Trabajador($horasTrabajadas);

    $salarioSinExtras = $trabajador->calcularSalarioSinExtras();
    $horasExtras = $trabajador->calcularHorasExtras();
    $salarioConExtras = $trabajador->calcularSalarioConExtras();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Salario</title>
</head>
<body>
    <h2>Resultado del Salario</h2>
    <p>Horas Trabajadas: <?php echo htmlspecialchars($horasTrabajadas); ?></p>
    <p>Horas Extras: <?php echo htmlspecialchars($horasExtras); ?></p>
    <p>Salario sin Horas Extras: S/.<?php echo htmlspecialchars($salarioSinExtras); ?></p>
    <p>Salario con Horas Extras: S/.<?php echo htmlspecialchars($salarioConExtras); ?></p>
    <a href="View/index.html">Volver</a>
</body>
</html>
