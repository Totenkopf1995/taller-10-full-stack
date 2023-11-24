<?php
// Datos de entrada
$numeroArreglo = array(4, 6, 2, 1, 2);
$suma = 0;

// Proceso
foreach ($numeroArreglo as $numero) {
    $suma += $numero;
}

echo "La suma total del arreglo es: " . $suma;
