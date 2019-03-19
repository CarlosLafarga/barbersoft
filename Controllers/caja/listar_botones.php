<?php
include "../../Conection/database_li.php";
$cn = Conectarse();


 $datos = $cn->query("SELECT * FROM servicios WHERE es_activo = 1");
 $count = 0;


   while($boton = $datos->fetch_assoc()){
   		
   		
   		
   		
   		if($count%3==0){ 
        echo '<tr>';} 

    	echo '<td><button type="button" id="'.$boton['Id_servicios'].'" value ="'.$boton['precio'].'" class="agregar btn btn-w-m btn-primary" onclick="agregar_venta(this)">'.$boton['nombre'].'</button></td>';
    	$count ++;

    	if($count%3==0){ 
        echo '</tr>';} 
   }

  $datos->free();
  $cn->close();