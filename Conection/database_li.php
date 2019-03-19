<?php
function Conectarse()
{
    $servidor    = "localhost";
    $basededatos = "barbersoft";
    $usuario     = "root";
    $clave       = "";

    @$cn = mysqli_connect($servidor, $usuario, $clave, $basededatos) or die("Error conectando a la base de datos");

    return $cn;
}
