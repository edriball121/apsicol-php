<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Administrador&action=index" ?>">Administrador</a></li>
            <li id="bread">Crear</li>
        </ul>
        <div class="col-xs-12">
            <form id="formCreateAdmin" action = "<?php echo "index.php?controller=administrador&action=create"; ?>" method="post">
                <h4 class="text-center" id="bold">CREAR ADMINISTRADOR</h4>
                <hr/>
                <div class="form-group">
                    <label for="txtAdm_cedula ">Cedula: </label>
                    <input type="number" class="form-control" id="txtAdm_cedula" name="txtAdm_cedula" >
                </div>
                <div class="form-group">
                    <label for="txtAdm_nombre">Nombre: </label>
                    <input type="text" class="form-control" id="txtAdm_nombre" name="txtAdm_nombre" >
                </div>
                <div class="form-group">
                    <label for="txtAdm_apellido">Apellido: </label>
                    <input type="text" class="form-control" id="txtAdm_apellido" name="txtAdm_apellido" >
                </div>
                <div class="form-group">
                    <label for="txtAdm_password">Password: </label>
                    <input type="password" class="form-control" id="txtAdm_password" name="txtAdm_password">
                </div>
                <div class="form-group">
                    <label for="txtAdm_telefono">Telefono: </label>
                    <input type="number" class="form-control" id="txtAdm_telefono" name="txtAdm_telefono">
                </div>
                <div class="form-group">
                    <label for="txtAdm_email">Email: </label>
                    <input type="email" class="form-control" id="txtAdm_email" name="txtAdm_email">
                </div>
                <div class="form-group">
                    <label for="txtAdm_direccion">Dirección: </label>
                    <input type="text" class="form-control" id="txtAdm_direccion" name="txtAdm_direccion">
                </div>
                <div class="form-group">
                    <label for="txtAdm_fecha_nacimiento">Fecha de Nacimiento: </label>
                    <input type="date" class="form-control" id="txtAdm_fecha_nacimiento" name="txtAdm_fecha_nacimiento">
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
                    <button id="btnGuardar" type="submit" class="btn btn-info">Guardar</button>
                </div>
                <hr>
            </form>
        </div>
    </div>
</div>


