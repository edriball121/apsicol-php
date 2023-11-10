<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Noticias&action=index" ?>">Noticias</a></li>
            <li id="bread">Editar</li>
        </ul>
        <?php
        if (isset($selectedNoticias)) {
            
        }
        ?>

        <div class="col-xs-12">
            <h4 class="text-center" id="bold">EDITAR NOTICIA</h4>
            <form id="formEditNoticias" action = "<?php echo "index.php?controller=Noticias&action=update"; ?>" method="post">
                <div class="form-group">
                    <input type="hidden" class="form-control" id="txtNot_codigo" name="txtNot_codigo" placeholder=""  value="<?php echo $selectedNoticias->not_codigo; ?>">
                </div>
                <div class="form-group">
                    <label for="txtNot_nombre">Nombre: </label>
                    <input type="text" class="form-control" id="txtNot_nombre" name="txtNot_nombre" placeholder="" value="<?php echo $selectedNoticias->not_nombre; ?>">
                </div>
                <div class="form-group">
                    <label for="txtNot_subtitulo">Subtitulo: </label>
                    <input type="text" class="form-control" id="txtNot_subtitulo" name="txtNot_subtitulo" placeholder="" value="<?php echo $selectedNoticias->not_subtitulo; ?>">
                </div>
                <div class="form-group">
                    <label for="txtNot_descripcion">Descripcion: </label>
                    <textarea class="form-control" id="txtNot_descripcion" name="txtNot_descripcion" placeholder="" rows="6"><?php echo $selectedNoticias->not_descripcion; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="txtNot_foto">Foto: </label>
                    <input type="text" class="form-control" id="txtNot_foto" name="txtNot_foto" placeholder="" value="<?php echo $selectedNoticias->not_foto; ?>">
                </div>
                
                <div class="form-group">
                    <label for="txtNot_url">Url: </label>
                    <input type="text" class="form-control" id="txtNot_url" name="txtNot_url" placeholder="" value="<?php echo $selectedNoticias->not_url; ?>">
                </div>
                <div class="text-center">
                    <button type="submit"  class="btn btn-success">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
    <div id="Eliminar" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Eliminar Elemento</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <h5><p>¿Desea eliminar el registro?</h5></p>
                </div>
                <div class="modal-footer">
                    <input type="submit" id="btn_eliminar_modal" class="btn btn-danger eliminar" data-dismiss="modal" data-toggle="modal" value="Aceptar">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>
