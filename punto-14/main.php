<?php
include "./passwordCheck.php";

// Datos de entrada
$user = "";
$password = "";

// Proceso
echo "Digite su usuario a registrar \n";
$user = readline();

echo "Digite su contrasena a registrar \n";
$password = readline();

if (hasSecurityLong($password)) {
    if (hasUpperLetter($password)) {
        if (hasNumber($password)) {
            echo "Felicitaciones su contrasena es segura";
        } else {
            echo "Su contrasena no tiene un numero";
        }
    } else {
        echo "Su contrasena no cumple con letras mayusculas \n";
    }
} else {
    echo "Su contrasena no cumple con la longitud segura \n";
}
