<?php
include "../../Conection/database.php";
$cn = Conectarse();


 $datos = $cn->query($cn, "SELECT * FROM servicios");
 
 $filas_cabecera = $cabecera->fetch_assoc();
 $boton = $datos->fetch_assoc();

 foreach ($boton as $datos) {
	
	/*aqui va el boton declarado*/
  	
  	
  }

  $datos->free();
  $cn->close();