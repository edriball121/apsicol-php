<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Fincas&action=index" ?>">Fincas</a></li>
            <li id="bread">Crear</li>
        </ul>

        <div class="col-xs-12">
            <h4 class="text-center" id="bold">CREAR FINCA</h4>
            <form id="formCreateFinca" action="<?php echo "index.php?controller=Fincas&action=create"; ?>" method="post">
                <div class="form-group">
                    <label for="txtFin_nombre">Nombre: </label>
                    <input type="text" class="form-control" id="txtFin_nombre" name="txtFin_nombre" placeholder="">
                </div>
                <div class="form-group">
                    <label for="txtFin_tamanno">Tamaño: </label>
                    <input type="number" class="form-control" id="txtFin_tamanno" name="txtFin_tamanno"
                           placeholder="">
                </div>
                <div class="form-group">
                    <label for="txtFin_direccion ">Direccion: </label>
                    <input type="text" class="form-control" id="txtFin_direccion" name="txtFin_direccion"
                           placeholder="">
                </div>
                <div class="form-group">
                    <label for="txtFin_telefono">Telefono: </label>
                    <input type="number" class="form-control" id="txtFin_telefono" name="txtFin_telefono"
                           placeholder="">
                </div>
                <div class="form-group">
                    <label for="txtFin_foto">foto: </label>
                    <input type="file" id="txtFin_foto" name="txtFin_foto" placeholder="">
                </div>
                <div class="form-group">
                    <label for="txtFin_productos">Producto: </label>
                    <input type="text" class="form-control" id="txtFin_productos" name="txtFin_productos"
                           placeholder="">
                </div>
                <div class="form-group">
                    <label for="txtFin_Descripcion">Descripcion: </label>
                    <textarea class="form-control" id="txtFin_Descripcion" name="txtFin_Descripcion" placeholder="" rows="6"></textarea>
                </div>
                <div class="text-center">
                    <button  type="submit" id="btnGuardar" class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>
    </div> <!-- row -->
    <br>
</div>
