<?PHP
include "../../Conection/database.php";
$cn = Conectarse();



$select = "SELECT * FROM servicios   WHERE activo = 1 ORDER BY Id_servicios";
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
