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

$link = mysqli_connect("localhost", "root", "", "barbersoft");

if (isset($_POST["tipo_corte"])) {
    /*para insertar en tabla de ventas pero por unidad*/
    $tipo_corte   = $_POST["tipo_corte"];
    $cantidad   = $_POST["cantidad"];
    $precio = $_POST["precio"];
    $subtotal = $_POST["subtotal"];

                       

    /*para insertar en tabla de ventas pero general*/
    $total_input    = $_POST['total'];
    $nombre_usuario = $_POST['nombre_usuario'];
    $tipo_pago      = $_POST['tipo_pago'];
    $pago_con       = $_POST['pago_con'];
    $id_barbero     = $_POST['id_barbero'];


    $resultado_cuenta = $pago_con - $total_input;

    $int_rand = rand(100000, 1000000);
    date_default_timezone_set('America/Hermosillo');
    $tiket = crearfolio();

    
    $query  = '';
    

    for ($count = 0; $count < count($tipo_corte); $count++) {

        $tipo_corte_clean   = mysqli_real_escape_string($link, $tipo_corte[$count]);
        $cantidad_clean   = mysqli_real_escape_string($link, $cantidad[$count]);
        $precios_clean = mysqli_real_escape_string($link, $precio[$count]);
        //$subtotal_clean = mysqli_real_escape_string($link, $subtotal[$count]);
        $cuenta = $precios_clean * $cantidad_clean;
        $random         = mysqli_real_escape_string($link, $tiket);


        if ($tipo_corte_clean!= ''  && $cantidad_clean != '' && $precios_clean != '' && $cuenta != '') {

        $query .= 'INSERT INTO ventas_servicios (id_ticket,tipo_corte,cantidad,precio,total,cancelado,fecha_creacion,fecha_modificacion)
                   VALUES("' . $random . '",
                          "' . $tipo_corte_clean . '",
                          "' . $cantidad_clean . '",
                          "' . $precios_clean . '",
                          "' . $cuenta . '",
                           0,
                           NOW(),
                           NOW());';

        }

    }

    

    $query2 = "INSERT INTO venta(id_ticket,id_personal,venta_total,tipo_pago,cancelado,fecha_creacion,fecha_modificacion)
               VALUES('" . $random . "',
                      '" . $id_barbero . "',
                      '" . $total_input . "',
                      '" . $tipo_pago . "',
                      0,
                      NOW(),
                      NOW());";

    if ($query != '' and $query2 != '') {

        if (mysqli_query($link, $query2)) {

            mysqli_close($link);

        } else {

            echo '4';

        }
       
/*----------------------------------------------------------------------------------------------------*/
        $link = mysqli_connect("localhost", "root", "", "barbersoft");
        if (mysqli_multi_query($link, $query)) {

            $array = array("numero" => 1, "no_tiket" => $random);

            echo json_encode($array);

            mysqli_close($link);

        } else {

            echo "6";

        }

/*----------------------------------------------------------------------------------------------------*/

    } else {

        echo '7';

    }

/*----------------------------------------------------------------------------------------------------*/
} else {

    echo "8";
}
