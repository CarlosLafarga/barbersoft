<?PHP
include "../../Conection/database.php";
$cn = Conectarse();

if(isset($_POST['nombre'])){

	$nombre = $_POST['nombre'];
	$precio = $_POST['precio'];
}

$insert = "INSERT INTO servicios (nombre,precio,es_activo,fecha_creacion,fecha_modificacion)VALUES('".$nombre."',".$precio.",1,NOW(),NOW());";
$result = mysql_query($insert, $cn);

if (!$result) {

    die(mysql_error());
    

} else {

    
    echo 1;
}
mysql_close($cn);
