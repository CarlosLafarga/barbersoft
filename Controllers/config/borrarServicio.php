<?PHP
include "../../Conection/database.php";
$cn = Conectarse();

if(isset($_POST['id'])){

	$id = $_POST['id'];
}

$borrar = "UPDATE servicios SET es_activo = 0 WHERE Id_servicios = ".$id.";";
$result = mysql_query($borrar, $cn);

if (!$result) {

    die(mysql_error());
    

} else {

    
    echo 1;
}

mysql_close($cn);

