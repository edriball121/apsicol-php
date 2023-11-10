<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Granjero&action=index" ?>">Granjero</a></li>
            <li id="bread">Editar</li>
        </ul>
        <?php
        if (isset($selectedGranjero)) {
            
        }
        ?>
        <div class="col-xs-12">
            <h4 class="text-center" id="bold">EDITAR GRANJERO</h4>
            <form id="formEditGranjero" action = "<?php echo "index.php?controller=granjero&action=update"; ?>" method="post">
                <div class="form-group">
                    <label for="txtGra_cedula ">Cedula: </label>
                    <input type="text" class="form-control" id="txtGra_cedula" name="txtGra_cedula" value="<?php echo $selectedGranjero->gra_cedula; ?>">
                </div>
                <div class="form-group">
                    <label for="txtGra_nombre">Nombre: </label>
                    <input type="text" class="form-control" id="txtGra_nombre" name="txtGra_nombre" value="<?php echo $selectedGranjero->gra_nombre; ?>">
                </div>
                <div class="form-group">
                    <label for="txtGra_apellido">Apellido: </label>
                    <input type="text" class="form-control" id="txtGra_apellido" name="txtGra_apellido" value="<?php echo $selectedGranjero->gra_apellido; ?>">
                </div>
                <div class="form-group">
                    <label for="txtGra_password">Password: </label>
                    <input type="password" class="form-control" id="txtGra_password" name="txtGra_password" value="<?php echo $selectedGranjero->gra_password; ?>">
                </div>
                <div class="form-group">
                    <label for="txtGra_telefono">Telefono: </label>
                    <input type="text" class="form-control" id="txtGra_telefono" name="txtGra_telefono"  value="<?php echo $selectedGranjero->gra_telefono; ?>">
                </div>
                <div class="form-group">
                    <label for="txtGra_email">Email: </label>
                    <input type="text" class="form-control" id="txtGra_email" name="txtGra_email"  value="<?php echo $selectedGranjero->gra_email; ?>">
                </div>
                <div class="form-group">
                    <label for="txtGra_direccion">Dirección: </label>
                    <input type="text" class="form-control" id="txtGra_direccion" name="txtGra_direccion"  value="<?php echo $selectedGranjero->gra_direccion; ?>">
                </div>
                <div class="form-group">
                    <label for="txtGra_fecha_nacimiento">Fecha de Nacimiento: </label>
                    <input type="date" class="form-control" id="txtGra_fecha_nacimiento" name="txtGra_fecha_nacimiento"  value="<?php echo $selectedGranjero->gra_fecha_nacimiento; ?>">
                </div>
                <div class="form-group">
                    <label for="txtGra_perfil_laboral">Perfil laboral: </label>
                    <input type="text" class="form-control" id="txtGra_perfil_laboral" name="txtGra_perfil_laboral" value="<?php echo $selectedGranjero->gra_perfil_laboral; ?>">
                </div>
                <div class="text-center">
                    <button type="submit"  class="btn btn-info">Actualizar</button>
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


