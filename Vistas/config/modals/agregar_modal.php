<div class="modal inmodal" id="agregar" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content animated fadeIn">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        <i class="fa fa-save modal-icon"></i>
                        <h4 class="modal-title">Agregar Servicio</h4>
                        <small></small>
                    </div>
                    <div class="modal-body">
                       <form method="POST" id="agregar_form">
                        <label>Nombre Servicio:</label>
                        <input class="form-control" type="text" name="nombre" id="nombre_servicio">
                        <br>
                        <label>Precio Servicio:</label>
                        <input class="form-control" type="number" min="0" value="0" name="precio" id="precio_servicio">
                       
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
            </div>
        </div>
</div>