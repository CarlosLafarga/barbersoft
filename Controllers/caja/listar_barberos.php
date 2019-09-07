<?PHP
include "../../Conection/database_li.php";
$cn = Conectarse();

$query  = "SELECT Id_personal,nombre_completo FROM personal  WHERE id_puesto  = 1 ORDER BY id_personal ASC";
$result = mysqli_query($cn , $query)or die($cn->error);


echo '<option value="0">Seleccionar opcion...</option>';
while (($fila = $result->fetch_assoc())) {
	
    echo '<option value="' . $fila["Id_personal"] . '">' . $fila["nombre_completo"] . '</option>';
}
// Liberar resultados

mysqli_close($cn);
