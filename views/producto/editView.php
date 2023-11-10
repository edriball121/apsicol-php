<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Producto&action=index" ?>">Producto</a></li>
            <li id="bread">Editar</li>
        </ul>
        <?php
        if (isset($selectedProducto)) {
            
        }
        ?>
        <div class="col-xs-12">
            <h4 class="text-center" id="bold">EDITAR PRODUCTO</h4>
            <hr>
            <form id="formEditProducto" action = "<?php echo "index.php?controller=Producto&action=update"; ?>" method="post">
                <div class="form-group">
                    <input type="hidden" class="form-control" id="txtPro_codigo" name="txtPro_codigo" placeholder="" value="<?php echo $selectedProducto->pro_codigo; ?>">
                </div>
                <div class="form-group">
                    <label for="txtPro_nombre">Nombre: </label>
                    <input type="text" class="form-control" id="txtPro_nombre" name="txtPro_nombre" placeholder=""  value="<?php echo $selectedProducto->pro_nombre; ?>">
                </div>
                <div class="form-group">
                    <label for="txtPro_descripcion">Descripcion: </label>
                    <input type="text" class="form-control" id="txtPro_descripcion" name="txtPro_descripcion" placeholder=""  value="<?php echo $selectedProducto->pro_descripcion; ?>">
                </div>
                <div class="form-group">
                    <label for="txtPro_precio">Precio: </label>
                    <input type="text" class="form-control" id="txtPro_precio" name="txtPro_precio" placeholder=""  value="<?php echo $selectedProducto->pro_precio; ?>">
                </div>
                <div class="form-group">
                    <label for="txtPro_estado">Estado: </label>
                    <input type="text" class="form-control" id="txtPro_estado" name="txtPro_estado" placeholder=""  value="<?php echo $selectedProducto->pro_estado; ?>">
                </div>
                <div class="form-group">
                    <label for="txtPro_cantidad">Cantidad: </label>
                    <input type="text" class="form-control" id="txtPro_cantidad" name="txtPro_cantidad" placeholder=""  value="<?php echo $selectedProducto->pro_cantidad; ?>">
                </div>
                <div class="form-group">
                    <label for="txtPro_terminos">Terminos y condiciones: </label>
                    <input type="text" class="form-control" id="txtPro_terminos" name="txtPro_terminos" placeholder=""  value="<?php echo $selectedProducto->pro_terminos_y_condiciones; ?>">
                </div>
                <div class="form-group">
                    <label for="txtPro_foto">Foto: </label>
                    <input type="text" class="form-control" id="txtPro_foto" name="txtPro_foto" placeholder=""  value="<?php echo $selectedProducto->pro_foto; ?>">
                </div>
                <div class="text-center">
                    <button type="submit"  class="btn btn-success">Actualizar</button>
                </div>
            </form>
        </div>
    </div><!-- row -->   

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
    <br>
</div>
