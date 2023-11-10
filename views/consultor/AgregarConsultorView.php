<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Consultor&action=index" ?>">Consultor</a></li>
            <li id="bread">Crear</li>
        </ul>
        <div class="col-xs-12">

            <form  id="formCreateConsultor" action = "<?php echo "index.php?controller=Consultor&action=create"; ?>" method="post">
                <h4 class="text-center" id="bold">AGREGAR CONSULTOR</h4>
                <div class="form-group">
                    <label for="txtCon_cedula">Cedula: </label>
                    <input type="number" class="form-control" id="txtCon_cedula" name="txtCon_cedula" placeholder="">
                </div>
                <div class="form-group">
                    <label for="txtCon_nombre">Nombre: </label>
                    <input type="text" class="form-control" id="txtCon_nombre" name="txtCon_nombre" placeholder="">
                </div>
                <div class="form-group">
                    <label for="txtCon_apellido">Apellido: </label>
                    <input type="text" class="form-control" id="txtCon_apellido" name="txtCon_apellido" placeholder="">
                </div>
                <div class="form-group">
                    <label for="txtCon_password">Contraseña: </label>
                    <input type="password" class="form-control" id="txtCon_password" name="txtCon_password" placeholder="">
                </div>
                <div class="form-group">
                    <label for="txtCon_telefono">Telefono: </label>
                    <input type="tel" class="form-control" id="txtCon_telefono" name="txtCon_telefono" placeholder="">
                </div>
                <div class="form-group">
                    <label for="txtCon_email">Email: </label>
                    <input type="email" class="form-control" id="txtCon_email" name="txtCon_email" placeholder="">
                </div>
                <div class="form-group">
                    <label for="txtCon_direccion">Direccion: </label>
                    <input type="text" class="form-control" id="txtCon_direccion" name="txtCon_direccion" placeholder="">
                </div>
                <div class="form-group">
                    <label for="txtCon_fecha_nacimiento">Fecha Nacimiento: </label>
                    <input type="date" class="form-control" id="txtCon_fecha_nacimiento" name="txtCon_fecha_nacimiento" placeholder="">
                </div>
                <div class="form-group">
                    <label for="txtCon_profesion">Profesion: </label>
                    <input type="text" class="form-control" id="txtCon_profesion" name="txtCon_profesion" placeholder="">
                </div>
                <div class="form-group">
                    <label for="txtCon_annos_experiencia">Anos de experiencia: </label>
                    <input type="text" class="form-control" id="txtCon_annos_experiencia" name="txtCon_annos_experiencia" placeholder="">
                </div>
                <div class="text-center">
                   <button type="submit" id="btnGuardar" class="btn btn-success">Guardar</button> 
                </div>
                <hr>
            </form>
        </div>
    </div>
</div>

