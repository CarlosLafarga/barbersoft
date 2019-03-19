<?PHP
include "../../Conection/database.php";
$cn = Conectarse();

$query  = "SELECT Id_personal,nombre_completo FROM personal  WHERE id_puesto  = 1 ORDER BY nombre_completo";
$result = mysql_query($query, $cn)
or die("Ocurrio un error en la consulta SQL");

//echo '<option value="0">Seleccionar opcion...</option>';
while (($fila = mysql_fetch_array($result)) != null) {

    echo '<option value="' . $fila["Id_personal"] . '">' . $fila["nombre_completo"] . '</option>';
}
// Liberar resultados
mysql_free_result($result);
mysql_close($cn);
