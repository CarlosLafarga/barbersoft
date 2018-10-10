
        <div class="row border-bottom white-bg">
        <nav class="navbar navbar-static-top" role="navigation">
            <div class="navbar-header">
                <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <i class="fa fa-reorder"></i>
                </button>
                <a href="../../Vistas/inicio/" class="navbar-brand">BARBERSOFT 1.0V</a>
            </div>

            <div class="navbar-collapse collapse" id="navbar">
                <ul class="nav navbar-nav">

                      <li class="dropdown">
                        <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown">Citas<span class="caret"></span></a>
                          <ul role="menu" class="dropdown-menu">
                            <li><a href="../../Vistas/citas/"><i class="fa fa-id-card"></i>&nbsp;&nbsp;Crear Cita</a></li>
                          </ul>
                      </li>
                       <li class="dropdown">
                        <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown">Caja<span class="caret"></span></a>
                          <ul role="menu" class="dropdown-menu">
                            <li><a href="../../Vistas/caja/"><i class="fa fa-id-card"></i>&nbsp;&nbsp;Nueva Venta</a></li>
                          </ul>
                      </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                       <b> Bienvenido:</b>&nbsp;&nbsp;<?php //echo $_SESSION["nombre"]; ?>
                       <input type="text" hidden name="name" id="name" value="<?php echo $_SESSION["nombre"]; ?>">
                    </li>
                    <li>
                        <a href="../Controlador/Salir.php">
                            <i class="fa fa-sign-out"></i> Cerrar Sesion
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        </div>
