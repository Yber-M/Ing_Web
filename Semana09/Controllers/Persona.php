<?php

require_once("../Model/clsPersona.php");

$name = $_POST["nombres"];
$lastname = $_POST["apellidos"];
$age = $_POST["edad"];
$carrer = $_POST["carrera"];

$people = new Persona($name, $lastname, $age, $carrer);

echo "<h2>Registro del Alumno<h2>";
echo "Nombres: " . $people->getNombre() . "<br>";
echo "Apellidos: " . $people->getApellidos() . "<br>";
echo "Edad: " . $people->getEdad() . "<br>";
echo "Carrera: " . $people->getCarrera() . "<br>";
