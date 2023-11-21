<?php
// Datos de entrada 
$num1 = 0;
$num2 = 0;
$operacion = '';
$resultado = 0;

// Proceso
echo "Indicame el primer numero: ";
$num1 = readline();

echo "Indicame el segundo numero: ";
$num2 = readline();

echo " 
(s/suma)\n 
(m/multiplicar)\n 
(d/division)\n 
(r/resta)\n
Indicame cual operacion deseas realizar: ";
$operacion = readline();

switch ($operacion) {
    case 's':
        $resultado = $num1 + $num2;
        echo $num1 . " + " . $num2 . " = " . $resultado;
        break;
    case 'm':
        $resultado = $num1 * $num2;
        echo $num1 . " * " . $num2 . " = " . $resultado;
        break;
    case 'd':
        $resultado = $num1 / $num2;
        echo $num1 . " / " . $num2 . " = " . $resultado;
        break;
    case 'r':
        $resultado = $num1 - $num2;
        echo $num1 . " - " . $num2 . " = " . $resultado;
        break;
    default:
        echo "Opción no válida";
}
