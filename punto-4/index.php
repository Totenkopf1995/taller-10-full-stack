<?php
// Datos de entrada
$nombre = "";
$apellido = "";

// Proceso
echo "Indique su nombre: \n";
$nombre = readline();

echo "Indique su apellido: \n";
$apellido = readline();

$nombreCompleto = $nombre . " " . $apellido;

echo "Su nombre completo es: " . $nombreCompleto;
