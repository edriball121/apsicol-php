<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Consultor&action=index" ?>">Consultor</a></li>
            <li id="bread">Editar</li>
        </ul>
        <?php
        if (isset($oneConsultor)) {
            ?>
        <h4 class="text-center" id="bold">EDITAR CONSULTOR</h4>
            <form  id="formEditConsultor" action = "<?php echo "index.php?controller=Consultor&action=update"; ?>" method="post">
                <div class="form-group">
                    <label for="txtCon_cedula">Cedula: </label>
                    <input type="number" class="form-control" id="txtCon_cedula" name="txtCon_cedula" placeholder="" value="<?php echo $oneConsultor->con_cedula; ?>">
                </div>
                <div class="form-group">
                    <label for="txtCon_nombre">Nombre: </label>
                    <input type="text" class="form-control" id="txtCon_nombre" name="txtCon_nombre" placeholder="" value="<?php echo $oneConsultor->con_nombre; ?>" >
                </div>
                <div class="form-group">
                    <label for="txtCon_apellido">Apellido: </label>
                    <input type="text" class="form-control" id="txtCon_apellido" name="txtCon_apellido" placeholder="" value="<?php echo $oneConsultor->con_apellido; ?>" >
                </div>
                <div class="form-group">
                    <label for="txtCon_password">Contraseña: </label>
                    <input type="password" class="form-control" id="txtCon_password" name="txtCon_password" placeholder="" value="<?php echo $oneConsultor->con_password; ?>" >
                </div>
                <div class="form-group">
                    <label for="txtCon_telefono">Telefono: </label>
                    <input type="tel" class="form-control" id="txtCon_telefono" name="txtCon_telefono" placeholder="" value="<?php echo $oneConsultor->con_telefono; ?>" >
                </div>
                <div class="form-group">
                    <label for="txtCon_email">Email: </label>
                    <input type="email" class="form-control" id="txtCon_email" name="txtCon_email" placeholder="" value="<?php echo $oneConsultor->con_email; ?>" >
                </div>
                <div class="form-group">
                    <label for="txtCon_direccion">Direccion: </label>
                    <input type="text" class="form-control" id="txtCon_direccion" name="txtCon_direccion" placeholder="" value="<?php echo $oneConsultor->con_direccion; ?>" >
                </div>
                <div class="form-group">
                    <label for="txtCon_fecha_nacimiento">Fecha Nacimiento: </label>
                    <input type="date" class="form-control" id="txtCon_fecha_nacimiento" name="txtCon_fecha_nacimiento" placeholder="" value="<?php echo $oneConsultor->con_fecha_nacimiento; ?>" >
                </div>
                <div class="form-group">
                    <label for="txtCon_profesion">Profesion: </label>
                    <input type="text" class="form-control" id="txtCon_profesion" name="txtCon_profesion" placeholder="" value="<?php echo $oneConsultor->con_profesion; ?>" >
                </div>
                <div class="form-group">
                    <label for="txtCon_annos_experiencia">Anos de experiencia: </label>
                    <input type="text" class="form-control" id="txtCon_annos_experiencia" name="txtCon_annos_experiencia" placeholder="" value="<?php echo $oneConsultor->con_annos_experiencia; ?>" >
                </div>
                <div class="text-center">
                    <button type="submit"  class="btn btn-success">Actualizar</button>
                </div>
                <hr>
            </form>
        <?php } ?>
    </div>
</div>


