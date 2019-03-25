<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inicio</title>
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
                                
                                <span>Total</span>
                                <input type="number" class="form-control" name="total" id="total" value="0" readonly="" min="0"  style="font-size: 30px; text-align: right;">
                                <br>
                                <span>Barbero</span>
                                <select class="form-control" id="barberos">
                                    
                                </select>
                                
                           

                            <hr/>
                            <span class="text-muted small">
                                *For United States, France and Germany applicable sales tax will be applied
                            </span>
                            <div class="m-t-sm">
                                <div class="btn-group">
                                <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart"></i> Pagar</a>
                                <a href="#" class="btn btn-white btn-sm"> Cancelar</a>
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
                            <table class="table table-bordered" >
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Tipo Corte</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
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
