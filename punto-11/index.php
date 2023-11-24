<?php
// Datos de entrada
$suma = 0;

for ($i = 1; $i <= 100; $i += 2) {
    echo $i . "\n";
    $suma += $i;
}

echo "La suma de todos los numeros impares es: " . $suma;
