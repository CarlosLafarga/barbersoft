<?PHP

include "../../Conection/database.php";

function validarUsuario($usuario, $password)
{
    $cn       = Conectarse();
    $consulta = "SELECT * FROM usuarios where username = '" . $usuario . "' AND password = '" . $password . "';";

    $result = mysql_query($consulta, $cn) or die(mysql_error());

    if (mysql_num_rows($result) > 0) {

        return true;

    } else {

        return false;

    }

}
?>