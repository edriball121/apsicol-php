<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Noticias&action=index" ?>">Noticias</a></li>
            <li id="bread">Listar</li>
        </ul>
        <div class="col-xs-12">
            <h4  class="text-center" id="bold">LISTAR NOTICIAS</h4>
            <div class="text-center">
                <a href="index.php?controller=noticias&action=crearnoticias"><button type="button" class="btn btn-success">CREAR NOTICIA</button></a>
            </div>
            <hr>
            <table class="table table-hover">
                <th class="col-sm-2 hidden-xs">Codigo</th>
                <th class="col-sm-2 col-xs-4">Nombre</th>
                <th class="col-sm-2 hidden-xs">Fecha de creacion</th>
                <th class="col-sm-3 hidden-xs">Url</th>
                <th class="col-sm-3 col-xs-8">Opciones</th>
                <?php
                if (isset($allNoticias)) { //viene de la clase producto controller
                    foreach ($allNoticias as $row) { //recorremos el array de objetos y obtenemos el valor de las propiedades
                        ?>
                            <tr>
                                <td class="col-sm-2 hidden-xs"><?php echo $row->not_codigo; ?></td>
                                <td class="col-sm-2 col-xs-4"><?php echo $row->not_nombre; ?></td>
                                <td class="col-sm-2 hidden-xs"><?php echo $row->not_fecha_creacion; ?></td>
                                <td class="col-sm-3 hidden-xs"><?php echo $row->not_url; ?></td>
                                <td class="col-sm-3 col-xs-8">
                                    <a href = "<?php echo "index.php?controller=Noticias&action=detailView&id=" . $row->not_codigo; ?>" class="btn-lg"><span class="glyphicon glyphicon-search white"></span></a>
                                    <a href = "<?php echo "index.php?controller=Noticias&action=editView&id=" . $row->not_codigo; ?>" class="btn-lg"><span class="glyphicon glyphicon-edit"></span></a>
                                    <a class="eliminar_btn btn-lg" itemController="Noticias" itemEliminar="<?php echo $row->not_codigo; ?>" controladorActual="Noticias" href="javascript:void(0);" data-toggle="modal" data-toggle="tooltip" data-target="#Eliminar" data-placement="bottom" title="Eliminar"><span class="glyphicon glyphicon-trash"></span></a>

                                </td>
                            </tr>
                        <?php
                    }
                }
                ?>

            </table>
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
    </div>
</div>

</div>
