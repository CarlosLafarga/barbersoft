<?php
function Conectarse()
{
    $servidor    = "localhost";
    $basededatos = "barbersoft";
    $usuario     = "root";
    $clave       = "";

    @$cn = mysqli_connect($servidor, $usuario, $clave, $basededatos) or die("Error conectando a la base de datos");

    if (!$cn) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
    }
    
    return $cn;
}
