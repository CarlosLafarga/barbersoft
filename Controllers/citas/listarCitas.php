<?PHP
include "../../Conection/database.php";
$cn = Conectarse();

$date = $_POST['date'];


$select = "SELECT nombre_persona,fechahora_cita,personal.nombre_completo FROM citas LEFT JOIN personal ON citas.id_persona = personal.id_personal  WHERE DATE(fechahora_cita) = '".$date."' ORDER BY fechahora_cita";
$result = mysql_query($select, $cn);

if (!$result) {

    die(mysql_error());

} else {
    $arreglo["data"] = [];
    while ($data = mysql_fetch_assoc($result)) {

        $arreglo["data"][] = $data;

    }
    echo json_encode($arreglo);
}
mysql_free_result($result);
mysql_close($cn);
