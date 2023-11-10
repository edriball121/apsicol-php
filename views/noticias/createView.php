<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Noticias&action=index" ?>">Noticias</a></li>
            <li id="bread">Crear</li>
        </ul>

        <div class="col-xs-12">
            <h4 class="text-center" id="bold">CREAR NOTICIA</h4>
            <form id="formCreateNoticias" action = "<?php echo "index.php?controller=noticias&action=create"; ?>" method="post">
                <div class="form-group">
                    <label for="txtNot_nombre">Nombre: </label>
                    <input type="text" class="form-control" id="txtNot_nombre" name="txtNot_nombre" placeholder="">
                </div>
                <div class="form-group">
                    <label for="txtNot_subtitulo">Subtitulo: </label>
                    <input type="text" class="form-control" id="txtNot_subtitulo" name="txtNot_subtitulo" placeholder="">
                </div>
                <div class="form-group">
                    <label for="txtNot_descripcion">Descripcion: </label>
                    <textarea class="form-control" id="txtNot_descripcion" name="txtNot_descripcion" placeholder="" rows="6"></textarea>
                </div>

                <div class="form-group">
                    <label for="txtNot_foto">Foto: </label>
                    <input type="file" id="txtNot_foto" name="txtNot_foto" placeholder="">
                </div>
                <div class="form-group">
                    <label for="txtNot_url">Url: </label>
                    <input type="text" class="form-control" id="txtNot_url" name="txtNot_url" placeholder="">
                </div>
                <div class="text-center">
                    <button type="submit" id="btnGuardar" class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>
    </div>
    <br>
</div>