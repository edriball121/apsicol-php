<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Canasta&action=index" ?>">Precios</a></li>
            <li id="bread">Crear</li>
        </ul>
        <div class="col-xs-12">
            <form id="formCreateCanasta" action = "<?php echo "index.php?controller=canasta&action=create"; ?>" method="post">
                <h4 class="text-center" id="bold">CREAR PRECIO</h4>
                <hr/>
                <div class="form-group">
                    <label for="txtCta_nombre">Nombre: </label>
                    <input type="text" class="form-control" id="txtCta_nombre" name="txtCta_nombre" placeholder="">
                </div>
                <div class="form-group">
                    <label for="txtCta_precio">Precio: </label>
                    <input type="number" class="form-control" id="txtCta_precio" name="txtCta_precio" placeholder="">
                </div>
                <div class="form-group">
                    <label for="txtCta_ciudad">Ciudad: </label>
                    <input type="text" class="form-control" id="txtCta_ciudad" name="txtCta_ciudad" placeholder="">
                </div>
                <div class="text-center">
                    <button type="submit" id="btnGuardar" class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>
    </div>
    <br>
</div>

