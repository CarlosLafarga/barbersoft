<?php
include "../../Conection/database.php";
$cn = Conectarse();

if (isset($_POST['nombre'])) {

    $nombre = $_POST['nombre'];
    $fecha_hora  = $_POST['fecha_hora'];
    $id_personal  = $_POST['peluquero'];
    
}

$sql = "INSERT INTO citas (nombre_persona,fechahora_cita,id_persona,fecha_creacion) VALUES ('".$nombre."','".$fecha_hora."',".$id_personal.",'NOW()')";

$ejecutar = mysql_query($sql, $cn) or die(mysql_error());

if ($ejecutar) {

    echo "1";

} else {

    echo "2";

}