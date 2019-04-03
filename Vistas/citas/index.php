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
                        <div class="col-lg-4">
                        <div class="ibox">
                        <div class="ibox-title">
                            <h5>Nueva cita</h5>
                        </div>
                        <div class="ibox-content">
                        <form  id="form-citas" >
                              <label>Nombre Persona</label>
                              <input type="text" name="name" id="nombre" class="form-control">
                              <br>
                              <label>Fecha Cita</label>
                              <div class="form-group" id="data1">
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" id="fecha" class="form-control" value="<?php date_default_timezone_set('America/Hermosillo'); echo date('Y-m-d'); ?>">
                                </div>
                              </div>
                              <label>Hora Cita</label>
                              <div class="input-group clockpicker"  data-autoclose="true">
                                <input name="hora" type="time" class="form-control" value="" id="hora" >
                                <span class="input-group-addon">
                                    <span class="fa fa-clock-o"></span>
                                </span>
                              </div>
                              <br>
                              <label>Nombre del Peluquero</label>
                              <select class="form-control" name="peluquero" id="peluquero">
                              </select>
                              <div class="hr-line-dashed"></div>
                              <div class="form-group">
                                  <button class="btn btn-primary" type="button" id="guardar">Guardar</button>
                                  <button class="btn btn-danger" type="button"  id="cancelar">Cancelar</button>
                              </div>
                            </form>
                          </div>
                          </div>
                          </div>
                          
                     
                        <div class="col-lg-8">
                        <div class="ibox">
                        <div class="ibox-title">
                            <h5>Citas del día</h5>
                        </div>
                        <div class="ibox-content">
                            

                            <div class="row">
                            <div class="col-lg-3">
                            <label>Fecha:</label>
                            <input type="date" name="fecha-escoger" id="fecha-escoger" class="form-control" value="<?php echo date('Y-m-d'); ?>" onchange="listar(this.value)"><br>
                            </div>
                            </div>

                            <table class="table table-bordered" >
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre Completo</th>
                                <th>Fecha y hora cita</th>
                                <th>Nombre del Barbero</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody id="citas_rows">
                            
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
                
          <!--footer-->
          
          <?PHP include "../../Includes/parts/footer.php";?>
          <!--fin footer-->
        </div>
    </div>
    

   

</body>
 <!-- Mainly scripts -->
    <?PHP include "js.php";?>
</html>
