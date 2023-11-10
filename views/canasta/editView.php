<div id="prinAp" class="container-fluid" >
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Canasta&action=index" ?>">Precios</a></li>
            <li id="bread">Editar</li>
        </ul>
        <?php
        if (isset($selectedCanasta)) {
            
        }
        ?>
        <div class="col-xs-12">
            <form id="formEditCanasta" action = "<?php echo "index.php?controller=Canasta&action=update"; ?>" method="post">
                <h4 class="text-center" id="bold">EDITAR PRECIO</h4>
                <hr/>
                <div class="form-group">
                    <input type="hidden" class="form-control" id="txtCta_codigo" name="txtCta_codigo" placeholder=""  value="<?php echo $selectedCanasta->cta_codigo; ?>">
                </div>
                <div class="form-group">
                    <label for="txtCta_nombre">Nombre: </label>
                    <input type="text" class="form-control" id="txtCta_nombre" name="txtCta_nombre" placeholder="" value="<?php echo $selectedCanasta->cta_nombre; ?>">
                </div>
                <div class="form-group">
                    <label for="txtCta_precio">Precio: </label>
                    <input type="number" class="form-control" id="txtCta_precio" name="txtCta_precio" placeholder="" value="<?php echo $selectedCanasta->cta_precio; ?>">
                </div>
                <div class="form-group">
                    <label for="txtCta_ciudad">Ciudad: </label>
                    <input type="text" class="form-control" id="txtCta_ciudad" name="txtCta_ciudad" placeholder="" value="<?php echo $selectedCanasta->cta_ciudad; ?>">
                </div>
        </div>
        <div class="text-center">
            <button type="submit"  class="btn btn-success">Actualizar</button>
        </div>
        <hr>
        </form>
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
                        <button type="button" id="btnGuardar" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
