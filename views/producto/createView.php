<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Producto&action=index" ?>">Producto</a></li>
            <li id="bread">Crear</li>
        </ul>
        <div class="col-xs-12">
            <h4 id="bold" class="text-center">CREAR PRODUCTO</h4>
            <hr>
            <form id="formCreateProducto" action = "<?php echo "index.php?controller=producto&action=create"; ?>" method="post">
                <div class="form-group">
                    <label for="txtPro_nombre">Nombre: </label>
                    <input type="text" class="form-control" id="txtPro_nombre" name="txtPro_nombre" placeholder="">
                </div>
                <div class="form-group">
                    <label for="txtPro_descripcion">Descripcion: </label>
                    <textarea class="form-control" id="txtPro_descripcion" name="txtPro_descripcion" placeholder="" rows="6"></textarea>
                </div>
                <div class="form-group">
                    <label for="txtPro_precio">Precio: </label>
                    <input type="text" class="form-control" id="txtPro_precio" name="txtPro_precio" placeholder="">
                </div>
                <div class="form-group">
                        
                            <label for="txtPro_estado">Estado: </label>
                            <select  class="form-control" id="txtPro_estado" name="txtPro_estado">
                                <option value="Selecione un estado">Selecione un estado</option>
                                <option value="Existencia">Existencia</option>
                                <option value="Agotado">Agotado</option>
                                <option value="Otro">Otro</option>
                            </select>
                        
                    </div>
                <div class="form-group">
                    <label for="txtPro_cantidad">Cantidad: </label>
                    <input type="text" class="form-control" id="txtPro_cantidad" name="txtPro_cantidad" placeholder="">
                </div>
                <div class="form-group">
                    <label for="txtPro_terminos">Terminos y condiciones: </label>
                    <input type="text" class="form-control" id="txtPro_terminos" name="txtPro_terminos" placeholder="">
                </div>
                <div class="form-group">
                    <label for="txtPro_foto">Foto: </label>
                    <input type="file"  id="txtPro_foto" name="txtPro_foto" placeholder="">
                </div>
                <div class="text-center">
                    <button type="submit" id="btnGuardar" class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>
    </div>
    <br>
</div>

