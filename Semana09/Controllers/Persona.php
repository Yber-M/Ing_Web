<?php

require_once("./model/clsPersona.php");

$name = $_POST["nombres"];
$lastname = $_POST["apellidos"];
$age = $_POST["edad"];
$carrer = $_POST["carrera"];

$people = new Persona($name, $lastname, $age, $carrer);

echo "<h2><h2>";
