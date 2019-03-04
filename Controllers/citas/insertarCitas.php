<?php
include "../../Conection/database.php";
$cn = Conectarse();

if (isset($_POST['nombre_persona'])) {

    $nombre_completo = $_POST['nombre_persona'];
    $fechahora_cita  = $_POST['monto'];
    $id_persona  = $_POST['fecha'];
    $fecha_creacion = $_POST['obs'];

}


$sql = "INSERT INTO citas(nombre,monto,fecha,obs)
        VALUES('" . $nombre . "','" . $monto . "','" . $fecha . "','" . $obs . "');";

$ejecutar = mysql_query($sql, $cn) or die(mysql_error());

if ($ejecutar) {

    echo "1";

} else {

    echo "2";

}