<?php

@require_once "../login/sesion.class.php";
$sesion  = new sesion();
$usuario = $sesion->get("usuario");

if ($usuario == false) {

    echo "<script language='JavaScript'>";
    echo "location = '../login/'";
    echo "</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Caja</title>
    <?PHP include "../../Includes/parts/css.php";?>
</head>

<body>
   <div id="wrapper">
     
        <!--MENU-->
          <?PHP include "../../Includes/parts/menu.php";?>
        <!--FIN MENU-->

        <div id="page-wrapper" class="gray-bg dashbard-1">
               <?PHP include "../../Includes/parts/navbar.php";?>
                <div class="row  border-bottom white-bg dashboard-header">
                  <!--titulo-->
                  
                </div>

                <div class="row">
                <div class="col-lg-12">
                <div class="wrapper wrapper-content">
                    <!--Contenedor-->
                <div class="row">
                <div class="col-md-9">

                    <div class="ibox">
                        <div class="ibox-title">
                            <span class="pull-right"></span>
                            <h5>Servicios</h5>
                        </div>
                        <div class="ibox-content">
                        <table class="table">
                        <tbody  id="txtHint" >
                       
                        </tbody>
                        </table>
                        </div>
                        
                        
                      
                        
                        <div class="ibox-content">

                        </div>
                    </div>
                </div>


                <div class="col-md-3">

                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Total</h5>
                        </div>
                        <div class="ibox-content">
                                
                                <label>Total</label>
                                <input type="number" class="form-control" name="total" id="total" value="0" readonly="" min="0"  style="font-size: 30px; text-align: right;">
                                <br>
                                <label>Barbero</label>
                                <select class="form-control" id="barberos">
                                    
                                </select>
                                <br>
                                <label>Tipo Pago</label>
                                <select class="form-control" id="tipo_pago">
                                    <option value="1">Efectivo</option>
                                    <option value="2">Tarjeta</option>
                                    <option value="3">Cortesia</option>
                                </select>
                                <br>
                                <label>Pago con</label>
                                <input class="form-control" min="0" type="number" name="pago_con" id="pago_con">

                            <hr/>
                            <span class="text-muted small">
                                
                            </span>
                            <div class="m-t-sm">
                                <div class="btn-group">
                                <a href="#" class="btn btn-primary btn-sm" onclick="pagar();"><i class="fa fa-shopping-cart"></i> Pagar</a>
                                <a href="#" class="btn btn-danger btn-sm" onclick="cancelar();"> Cancelar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="col-lg-12">
                        <div class="ibox">
                        <div class="ibox-title">
                            <h5>Venta</h5>
                        </div>
                        <div class="ibox-content">
                         
                             
                            <div class="ibox-content">
                            <div class="table-responsive">
                            <table id="tablita" class="table table-bordered" >
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Tipo Corte</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Total</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody id="ventas">
                            
                            </tbody>
                            </table>
                            </div>
                         
                        </div>
                        </div>
                        </div>
                        </div>
                </div>
                    <!--Fin Contenedor-->   
                </div>
                </div>
                </div>
          <!--footer-->
          
          <?PHP include "../../Includes/parts/footer.php";?>
          <!--fin footer-->
        </div>
    </div>
    

    <!-- Mainly scripts -->
    <?PHP include "js.php";?>
</body>
</html>
