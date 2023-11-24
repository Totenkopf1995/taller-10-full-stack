<?php
// Datos de entrada
$numero = 0;

// Proceso
echo "Indicame el numero para multipliar: ";
$numero = readline();

for ($i = 0; $i <= 30; $i++) {
    $resultado = $numero * $i;
    echo $numero . " x " . $i . " = " . $resultado . "\n";
}
