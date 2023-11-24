<?php
// Datos de entrada
$numero = 0;
$contador = 0;
$resultado = 0;

// Proceso
echo "indica el numero de la tabla de multiplicar: ";
$numero = readline();

while ($contador <= 30) {
    $resultado = $numero * $contador;
    echo $numero . " x " . $contador . " = " . $resultado . "\n";
    $contador++;
}
