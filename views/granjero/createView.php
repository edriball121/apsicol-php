<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Granjero&action=index" ?>">Granjero</a></li>
            <li id="bread">Crear</li>
        </ul>
        <div class="col-xs-12">
            <h4 class="text-center" id="bold">CREAR GRANJERO</h4>
            <form id="formCreateGranjero" action = "<?php echo "index.php?controller=granjero&action=create"; ?>" method="post">
                <div class="form-group">
                    <label for="txtGra_cedula ">Cedula: </label>
                    <input type="text" class="form-control" id="txtGra_cedula" name="txtGra_cedula" >
                </div>
                <div class="form-group">
                    <label for="txtGra_nombre">Nombre: </label>
                    <input type="text" class="form-control" id="txtGra_nombre" name="txtGra_nombre" >
                </div>
                <div class="form-group">
                    <label for="txtGra_apellido">Apellido: </label>
                    <input type="text" class="form-control" id="txtGra_apellido" name="txtGra_apellido" >
                </div>
                <div class="form-group">
                    <label for="txtGra_password">Password: </label>
                    <input type="text" class="form-control" id="txtGra_password" name="txtGra_password">
                </div>
                <div class="form-group">
                    <label for="txtGra_telefono">Telefono: </label>
                    <input type="text" class="form-control" id="txtGra_telefono" name="txtGra_telefono">
                </div>
                <div class="form-group">
                    <label for="txtGra_email">Email: </label>
                    <input type="text" class="form-control" id="txtGra_email" name="txtGra_email">
                </div>
                <div class="form-group">
                    <label for="txtGra_direccion">Dirección: </label>
                    <input type="text" class="form-control" id="txtGra_direccion" name="txtGra_direccion">
                </div>
                <div class="form-group">
                    <label for="txtGra_fecha_nacimiento">Fecha de Nacimiento: </label>
                    <input type="date" class="form-control" id="txtGra_fecha_nacimiento" name="txtGra_fecha_nacimiento">
                </div>
                <div class="form-group">
                    <label for="txtGra_perfil_laboral">Perfil laboral: </label>
                    <textarea class="form-control" id="txtGra_perfil_laboral" name="txtGra_perfil_laboral" rows="6"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" id="btnGuardar" class="btn btn-info">Guardar</button>
                </div>
            </form>
        </div>
    </div>
    <br>
</div>
