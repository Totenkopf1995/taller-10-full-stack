<?php
// Datos de entrada
$nombre = "";
$edad = 0;

// Procesos
echo "Indique su nombre: ";
$nombre = readline();

echo "Indique su edad: ";
$edad = readline();

echo "Usted se llama " . $nombre . " y tiene " . $edad . " a;os \n";

if ($edad >= 18) {
    echo $nombre . ", usted es mayor de edad";
} else {
    echo $nombre . ", usted es menor de edad";
}
