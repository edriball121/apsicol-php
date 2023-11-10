<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Ciudad&action=index" ?>">Ciudad</a></li>
            <li id="bread">Crear</li>
        </ul>

        <div class="col-xs-12">
            <form id="formCreateCiudad" action = "<?php echo "index.php?controller=ciudad&action=create"; ?>" method="post">
                <h4 class="text-center" id="bold">CREAR CIUDAD</h4>
                <div class="form-group">
                    <label for="txtCiu_nombre">Nombre: </label>
                    <input type="text" class="form-control" id="txtCiu_nombre" name="txtCiu_nombre" placeholder="">
                </div>
                <div class="form-group">
                    <label for="txtCiu_estado">Estado: </label>
                    <input type="text" class="form-control" id="txtCiu_estado" name="txtCiu_estado" placeholder="">
                </div>
                <div class="text-center">
                    <button type="submit" id="btnGuardar" class="btn btn-success">Guardar</button>
                </div>
                <hr>
            </form>
        </div>
    </div>
</div>