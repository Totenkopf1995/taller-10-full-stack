<?php
function getNumber()
{
    echo "Indique un numero para la operacion \n";
    return readline();
}
function showMenu()
{
    echo "Digite la opcion de operacion siendo: \n";
    echo "1 - SUMAR \n";
    echo "2 - RESTAR \n";
    echo "3 - MULTIPLICAR \n";
    echo "4 - DIVIDIR \n";

    return readline();
}
function operate($x, $y, $option)
{
    switch ($option) {
        case 1:
            return add($x, $y);
        case 2:
            return sub($x, $y);
        case 3:
            return dot($x, $y);
        case 4:
            return split($x, $y);

        default:
            echo "Opcion no valida";
            return 0;
    }
}
function add($x, $y)
{
    return $x + $y;
}
function sub($x, $y)
{
    return $x - $y;
}
function dot($x, $y)
{
    return $x * $y;
}
function split($x, $y)
{
    return $x / $y;
}
