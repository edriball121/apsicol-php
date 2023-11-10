<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Producto&action=index" ?>">Producto</a></li>
            <li id="bread">Crear</li>
        </ul>
        <h4 id="bold" class="text-center">PUBLICAR PRODUCTO</h4>
        <hr>
        <div class="col-xs-12">
            <form id="formCrearProducto" action = "<?php echo "index.php?controller=producto&action=create"; ?>" method="post">

                <div class="col-xs-9">
                    <div class="col-xs-12">
                        <label for="txtPro_nombre">Nombre: </label>
                        <input type="text" class="form-control" id="txtPro_nombre" name="txtPro_nombre" placeholder="">
                    </div>
                    <label for="" class="col-xs-7">Descripción: </label>   
                    <div class="col-xs-12">
                        <textarea id="txtPro_descripcion" name="txtPro_descripcion" class="" rows="6" cols="125" required="" data-validate="true"></textarea>
                        <div>La descripción debe tener al menos  100  caracteres</div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <label for="txtPro_estado">Estado: </label>
                            <select  class="form-control" id="txtPro_estado" name="txtPro_estado">
                                <option value="Selecione un estado">Selecione un estado</option>
                                <option value="Existencia">Existencia</option>
                                <option value="Agotado">Agotado</option>
                                <option value="Otro">Otro</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <label for="txtPro_precio">Precio: </label>
                        <input type="text" class="form-control" id="txtPro_precio" name="txtPro_precio" placeholder="">
                    </div>
                    <div class="col-xs-12">
                        <label for="txtPro_cantidad">Cantidad: </label>
                        <input type="text" class="form-control" id="txtPro_cantidad" name="txtPro_cantidad" placeholder="">
                    </div>
                    <div class="col-xs-12">
                        <hr>
                        <input type="checkbox" name="txtPro_condiciones" id="txtPro_condiciones" />
                        <label for="txtPro_condiciones"><p>Al publicar avisos, aceptas los <a href="condiciones.php"> terminos y condiciones </a> de APSICOL.</p></label>
                    </div>
                </div>

                <div class="col-xs-3">
                    <label for="txtPro_foto">Foto: </label>
                    <img id="txtPro_foto"  src="img/tangerina.png" width="100%" height="300px">
                </div>
                  
                <div class="col-xs-12">
                    
                    <div class="text-center"><button id="btnGuardar"  type="submit" class="btn btn-info">Guardar</button></div>
                    
                    <br>
                </div>
                
            </form>
        </div>
    </div>
</div>


