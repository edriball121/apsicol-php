<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Ciudad&action=index" ?>">Ciudad</a></li>
            <li id="bread">Editar</li>
        </ul>
        <?php
        if (isset($selectedCiudad)) {
            
        }
        ?>
        <div class="col-xs-12">
            <form id="formEditCiudad" action = "<?php echo "index.php?controller=Ciudad&action=update"; ?>" method="post">
                <h4 class="text-center" id="bold">EDITAR CIUDAD</h4>
                <hr/>
                <div class="form-group">
                    <input type="hidden" class="form-control" id="txtCiu_codigo" name="txtCiu_codigo" placeholder=""  value="<?php echo $selectedCiudad->ciu_codigo; ?>">
                </div>
                <div class="form-group">
                    <label for="txtCiu_nombre">Nombre: </label>
                    <input type="text" class="form-control" id="txtCiu_nombre" name="txtCiu_nombre" placeholder="" value="<?php echo $selectedCiudad->ciu_nombre; ?>">
                </div>
                <div class="form-group">
                    <label for="txtCiu_estado">Estado: </label>
                    <input type="text" class="form-control" id="txtCiu_estado" name="txtCiu_estado" placeholder="" value="<?php echo $selectedCiudad->ciu_estado; ?>">
                </div>
                <div class="text-center">
                    <button type="submit"  class="btn btn-success">Actualizar</button>
                </div>
            </form>
        </div>

        <div id="Eliminar" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3>Eliminar Elemento</h3>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <h5><p>¿Desea eliminar el registro?</h5></p>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" id="btn_eliminar_modal" class="btn btn-danger eliminar" data-dismiss="modal" data-toggle="modal" value="Aceptar">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>
