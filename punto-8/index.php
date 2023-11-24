<?php
// Datos de entrada
$membershipType = "";
$personNumber = 0;
const TICKET_PRICE = 25000;

// Proceso
echo "Digite el tipo de membrecia: ";
$membershipType = strtoupper(readline());

echo "Digite el numero de personas: ";
$personNumber = readline();

$totalPay = $personNumber * TICKET_PRICE;

switch ($membershipType) {
    case 'A':
        $totalPay *= 0.7;
        break;
    case 'B':
        $totalPay *= 0.75;
        break;
    case 'C':
        $totalPay *= 0.9;
        break;
    case 'D':
        $totalPay *= 0.95;
        break;
    default:
        echo "Usted no cuenta con una menbresia para descuento\n";
        break;
}

echo "El total a pagar es de: " . $totalPay;
