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
                        <tbody>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-primary m-r-sm">1</button>
                                Corte Tradicional
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary m-r-sm">2</button>
                                Corte Rasurado
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary m-r-sm">3</button>
                               Comments
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-primary m-r-sm">4</button>
                                News
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary m-r-sm">5</button>
                                Likes
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary m-r-sm">6</button>
                                Notifications
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-primary m-r-sm">6</button>
                                Albums
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary m-r-sm">7</button>
                                Groups
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary m-r-sm">8</button>
                                Permissions
                            </td>
                        </tr>
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
                                <input type="text" class="form-control" name="total" id="total" value="$390,00" readonly="">
                                <br>
                                <br>
                           

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
                              <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre Completo</th>
                                <th>Fecha y hora cita</th>
                                <th>Nombre del Barbero</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                            </table>
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
    <?PHP include "../../Includes/parts/js.php";?>
</body>
</html>
