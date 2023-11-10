<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Servicios&action=index" ?>">Servicios</a></li>
            <li id="bread">Detalles</li>
        </ul>
        <?php
        if (isset($oneServicio)) {
            ?>
            <div class="col-xs-12">
                <h4 class="text-center" id="bold">EDITAR SERVICIOS</h4>
                <hr>
                <form id="formEditServicios" action = "<?php echo "index.php?controller=Servicios&action=update"; ?>" method="post">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="txtSer_codigo" name="txtSer_codigo" placeholder="" value="<?php echo $oneServicio->ser_codigo; ?>">
                    </div>
                    <div class="form-group">
                        <label for="txtCon_nombre">Nombre: </label>
                        <input type="text" class="form-control" id="txtSer_nombre" name="txtSer_nombre" placeholder="" value="<?php echo $oneServicio->ser_nombre; ?>">
                    </div>
                    <div class="form-group">
                        <label for="txtCon_apellido">Descripcion: </label>
                        <textarea class="form-control" id="txtSer_descripcion" name="txtSer_descripcion" placeholder="" rows="6"><?php echo $oneServicio->ser_descripcion; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="txtCon_password">Valor: </label>
                        <input type="number" class="form-control" id="txtSer_valor" name="txtSer_valor" placeholder="" value="<?php echo $oneServicio->ser_valor; ?>">
                    </div>
                    <div class="form-group">
                        <label for="txtCon_telefono">Foto: </label>
                        <input type="file"  accept="image/*" id="txtSer_foto" name="txtSer_foto" placeholder="" value="<?php echo $oneServicio->ser_foto; ?>">
                    </div>
                    <div class="form-group">
                        <label for="txtCon_telefono">codigo Empresa: </label>
                        <input type="number" class="form-control" id="txtFK_ser_emp_codigo" name="txtFK_ser_emp_codigo" placeholder="" value="<?php echo $oneServicio->FK_ser_emp_codigo; ?>">
                    </div>
                    <div class="text-center">
                        <button type="submit"  class="btn btn-success">Actualizar</button>
                    </div>
                </form>
            <?php } ?>
        </div>
    </div>
    <br>
</div>


