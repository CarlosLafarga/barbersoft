
<!DOCTYPE html>
<html>
<head>
   <title>BarberSoft</title>
   <!--css-->
   <?PHP include "../../Includes/parts/css.php";?>
</head>
<body class="top-navigation">
  <div id="wrapper">
     <div id="page-wrapper" class="gray-bg">
            <!--menu-->
            <?PHP include "../../Includes/parts/menu.php";?>
            <div class="wrapper wrapper-content">
               <div class="container">

                      <!-- Contenido de la pagína-->
                      <!--breadcrumb-->
                      <div class="row wrapper border-bottom white-bg page-heading">
                         <div class="col-lg-10">
                             <h2>Citas</h2>
                             <ol class="breadcrumb">
                                 <li>
                                     <a href="">Inicio</a>
                                 </li>
                                 <li class="active">
                                     <strong>Citas</strong>
                                 </li>
                             </ol>
                         </div>
                     </div>
                     <!--fin breadcrumb-->
                      <br>
                      <div class="row">
                      <div class="col-lg-4">
                      <div class="row wrapper border-bottom white-bg page-heading">
                         
                            <h2>Crear Citas</h2>
                            <div class="ibox-content">
                            <form  id="form-citas" >
                              <label>Nombre Persona</label>
                              <input type="text" name="name" class="form-control">
                              <br>
                              <label>Fecha Cita</label>
                              <input type="date" name="fecha" class="form-control">
                              <br>
                              <label>Hora Cita</label>
                              <div class="input-group clockpicker" data-autoclose="true">
                                <input name="hora" type="time" class="form-control" value="" >
                                <span class="input-group-addon">
                                    <span class="fa fa-clock-o"></span>
                                </span>
                              </div>
                              <br>
                              <label>Nombre del Peluquero</label>
                              <select class="form-control" name="peluquero">
                                <option value="">Seleccione una opcion</option>
                                <option value="peluquero1">Peluquero 1</option>
                                <option value="peluquero1">Peluquero 2</option>
                                <option value="peluquero1">Peluquero 3</option>
                              </select>
                              <div class="hr-line-dashed"></div>
                              <div class="form-group">
                                  <button class="btn btn-primary" type="button" id="guardar">Guardar</button>
                                  <button class="btn btn-danger" type="button" id="cancelar">Cancelar</button>
                              </div>
                            </form>
                            </div>

                     </div>
                     </div>
                     <!---->
                     <div class="col-lg-1">
                     </div>
                     <!---->
                     <div class="col-lg-7">
                      <div class="row wrapper border-bottom white-bg page-heading">
                         
                             <h2>Calendario</h2>
                             <div class="ibox-content">
                             <div id="calendar"></div>
                             </div>
                         
                     </div>
                     </div>
                     </div><br>
                      

               </div>

            </div>
            <!--footer-->
      <?PHP include "../../Includes/parts/footer.php";?>
      </div>
      
  </div>
</body>
<!--js-->
<?PHP include "../../Includes/parts/js.php";?>
<script src="script.js"></script>
</html>
