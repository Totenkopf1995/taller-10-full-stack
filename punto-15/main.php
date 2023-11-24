<?php
include "./operationUtils.php";
// Datos de entrada
$numberOne = 0;
$numberTwo = 0;
$option = "";

// Proceso
$numberOne = getNumber();
$numberTwo = getNumber();

$option = showMenu();


$result = operate($numberOne, $numberTwo, $option);

echo "El resultado de la operacion es: " . $result;
