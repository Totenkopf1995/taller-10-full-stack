<?php
// Datos de entrada
const TICKER_PRICE = 25000;
$membershipType = "";
$personNumber = 0;

// Proceso
echo "Indique el tipo de menbresia: ";
$membershipType = strtoupper(readline());

echo "Indique el numero de personas que ingresaran: ";
$personNumber = readline();

$totalPay = $personNumber * TICKER_PRICE;

if ($membershipType == 'A' || $membershipType == 'B') {
    $discount = $totalPay * 0.3;
    $totalPay -= $discount;
} else {
    echo "usted no cuenta con una menbresia valida para descuento";
}

echo "El total a pagar es: " . $totalPay;
