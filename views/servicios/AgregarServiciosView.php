<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Servicios&action=index" ?>">Servicios</a></li>
            <li id="bread">Crear</li>
        </ul>
        <div class="col-xs-12">
            <h4 class="text-center" id="bold">CREAR SERVICIO</h4>
            <hr>
            <form id="formCreateServicios" action = "<?php echo "index.php?controller=Servicios&action=create"; ?>" method="post">
                <div class="form-group">
                    <label for="txtSer_nombre">Nombre: </label>
                    <input type="text" class="form-control" id="txtSer_nombre" name="txtSer_nombre" placeholder="">
                </div>
                <div class="form-group">
                    <label for="txtSer_descripcion">Descripcion: </label>
                    <textarea class="form-control" id="txtSer_descripcion" name="txtSer_descripcion" placeholder="" rows="6"></textarea>
                </div>
                <div class="form-group">
                    <label for="txtSer_valor">Valor: </label>
                    <input type="number" class="form-control" id="txtSer_valor" name="txtSer_valor" placeholder="">
                </div>
                <div class="form-group">
                    <label for="txtSer_foto">Foto: </label>
                    <input type="file"  accept="image/*" id="txtSer_foto" name="txtSer_foto" placeholder="">
                </div>
                <div class="form-group">
                    <label for="txtFK_ser_emp_codigo">Codigo Empresa: </label>
                    <input type="number" class="form-control" id="txtFK_ser_emp_codigo" name="txtFK_ser_emp_codigo" placeholder="">
                </div>
                <div class="text-center">
                    <button type="submit" id="btnGuardar" class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>
    </div>
    <br>
</div>

