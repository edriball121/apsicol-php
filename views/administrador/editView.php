<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Administrador&action=index" ?>">Administrador</a></li>
            <li id="bread">Editar</li>
        </ul>
        <?php
        if (isset($selectedAdministrador)) {
            
        }
        ?>
        <div class="col-xs-12">
            <form id="formEditAdmin" action = "<?php echo "index.php?controller=administrador&action=update"; ?>" method="post">
                <h4 class="text-center" id="bold">EDITAR ADMINISTRADOR</h4>
                <hr/>
                <div class="form-group">
                    <label for="txtAdm_cedula ">Cedula: </label>
                    <input type="text" class="form-control" id="txtAdm_cedula" name="txtAdm_cedula" value="<?php echo $selectedAdministrador->adm_cedula; ?>">
                </div>
                <div class="form-group">
                    <label for="txtAdm_nombre">Nombre: </label>
                    <input type="text" class="form-control" id="txtAdm_nombre" name="txtAdm_nombre" value="<?php echo $selectedAdministrador->adm_nombre; ?>">
                </div>
                <div class="form-group">
                    <label for="txtAdm_apellido">Apellido: </label>
                    <input type="text" class="form-control" id="txtAdm_apellido" name="txtAdm_apellido" value="<?php echo $selectedAdministrador->adm_apellido; ?>">
                </div>
                <div class="form-group">
                    <label for="txtAdm_password">Password: </label>
                    <input type="password" class="form-control" id="txtAdm_password" name="txtAdm_password" value="<?php echo $selectedAdministrador->adm_password; ?>">
                </div>
                <div class="form-group">
                    <label for="txtAdm_telefono">Telefono: </label>
                    <input type="text" class="form-control" id="txtAdm_telefono" name="txtAdm_telefono"  value="<?php echo $selectedAdministrador->adm_telefono; ?>">
                </div>
                <div class="form-group">
                    <label for="txtAdm_email">Email: </label>
                    <input type="text" class="form-control" id="txtAdm_email" name="txtAdm_email"  value="<?php echo $selectedAdministrador->adm_email; ?>">
                </div>
                <div class="form-group">
                    <label for="txtAdm_direccion">Dirección: </label>
                    <input type="text" class="form-control" id="txtAdm_direccion" name="txtAdm_direccion"  value="<?php echo $selectedAdministrador->adm_direccion; ?>">
                </div>
                <div class="form-group">
                    <label for="txtAdm_fecha_nacimiento">Fecha de Nacimiento: </label>
                    <input type="date" class="form-control" id="txtAdm_fecha_nacimiento" name="txtAdm_fecha_nacimiento"  value="<?php echo $selectedAdministrador->adm_fecha_nacimiento; ?>">
                </div>
                <div class="form-group">
                    <label for="txtAdm_fecha_creacion">Fecha de creación: </label>
                    <input type="text" class="form-control" id="txtAdm_fecha_creacion" name="txtAdm_fecha_creacion"  value="<?php echo $selectedAdministrador->adm_fecha_creacion; ?>">
                </div>

                <div class="form-group">
                    <label for="txtAdm_rol">Rol: </label>
                    <select  class="form-control" id="txtAdm_rol" name="txtAdm_rol">
                    <option value="Bases de datos">Bases de datos</option>
                    <option value="Frontend">Frontend</option>
                    <option value="Backend">Backend</option>
                    
                </select>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-info">Actualizar</button>
                </div>
                <hr>
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
                    <button type="button" id="btnGuardar" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
</div>  


