<?PHP

function crearfolio(){
    include "../../Conection/database.php";
    $cn           = Conectarse();
    $consulta_rpt = mysql_query("select * from venta order by Id_venta desc", $cn);
    $row_rpt      = mysql_fetch_array($consulta_rpt);
    $anioact      = date('y');
    $ultfolio     = $row_rpt['id_ticket'];

    @list($prefijo, $consecutivo) = explode('-', $ultfolio);
    if ($anioact == $prefijo) {
        $num      = $consecutivo + 1;
        $longitud = strlen($num);
        $faltan   = 5 - $longitud;
        if ($faltan == 4) {$folio = $prefijo . '-' . '0000' . $num;}
        if ($faltan == 3) {$folio = $prefijo . '-' . '000' . $num;}
        if ($faltan == 2) {$folio = $prefijo . '-' . '00' . $num;}
        if ($faltan == 1) {$folio = $prefijo . '-' . '0' . $num;}
        if ($faltan == 0) {$folio = $prefijo . '-' . $num;}
        return $folio;
    } else {
        $folio = $anioact . '-00001';
        return $folio;
    }
}