<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Pecuario&action=index" ?>">Pecuario</a></li>
            <li id="bread">Crear</li>
        </ul>
        <div class="col-xs-12">
            <form id="formCreatePecuario" action="<?php echo "index.php?controller=pecuario&action=create"; ?>" method="post">
                <h4 class="text-center" id="bold">CREAR PECUARIO</h4>
                <hr>
                <div class="form-group">
                    <label for="txtApe_nombre">Nombre del producto: </label>
                    <input type="text" class="form-control" id="txtApe_nombre" name="txtApe_nombre" placeholder="">
                </div>
                <div class="form-group">
                    <label for="txtApe_tipo ">Tipo de producto: </label>
                    <input type="text" class="form-control" id="txtApe_tipo" name="txtApe_tipo" placeholder="">
                </div>
                <div class="form-group">
                    <label for="txtApe_Foto ">Foto del producto: </label>
                    <input type="file"  id="txtApe_Foto" name="txtApe_Foto">
                </div>
                <div class="form-group">
                    <label for="txtApe_Descripcion">Descripción del producto: </label>
                    <textarea class="form-control" id="txtApe_Descripcion" name="txtApe_Descripcion" placeholder="" rows="6"></textarea>
                </div>
                <br>
                <div class="text-center">
                    <button type="submit" id="btnGuardar" class="btn btn-success">Guardar</button>
                </div>
        </div>
        </form>
    </div>
    <br>
</div>
