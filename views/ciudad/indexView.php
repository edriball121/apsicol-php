sm<d col-xs-4iv id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Ciudad&action=index" ?>">Ciudad</a></li>
            <li id="bread">Listar</li>
        </ul>

        <div class= "col-xs-12">

            <h4 class="text-center" id="bold">LISTAR CIUDAD</h4>
            <div class="text-center">
                <a href="index.php?controller=ciudad&action=crearciudad"><button type="button" class="btn btn-success">CREAR CIUDAD</button></a>
            </div>
            <hr>

            <table class="table table-hover">
                <th class="col-sm-3 col-xs-3">Codigo</th>
                <th class="col-sm-3 col-xs-3">Nombre</th>
                <th class="col-sm-3 hidden-xs">Estado</th>
                <th class="col-sm-3 col-xs-6">Opciones</th>
                <?php
                if (isset($allCiudad)) { //viene de la clase ciudad controller
                    foreach ($allCiudad as $row) { //recorremos el array de objetos y obtenemos el valor de las propiedades
                        ?>
                        <tr>
                            <td class="col-sm-3 col-xs-3"><?php echo $row->ciu_codigo; ?></td>
                            <td class="col-sm-3 col-xs-3"><?php echo $row->ciu_nombre; ?></td>
                            <td class="col-sm-3 hidden-xs"><?php echo $row->ciu_estado; ?></td>
                            <th class="col-sm-3 col-xs-6">
                                <a href = "<?php echo "index.php?controller=Ciudad&action=detailView&id=" . $row->ciu_codigo; ?>" class="btn-lg"><span class="glyphicon glyphicon-search white"></span></a>
                                <a href = "<?php echo "index.php?controller=Ciudad&action=editView&id=" . $row->ciu_codigo; ?>" class="btn-lg"><span class="glyphicon glyphicon-edit"></span></a>
                                <a class="eliminar_btn btn-lg" itemController="Ciudad" itemEliminar="<?php echo $row->ciu_codigo; ?>" controladorActual="Ciudad" href="javascript:void(0);" data-toggle="modal" data-toggle="tooltip" data-target="#Eliminar" data-placement="bottom" title="Eliminar"><span class="glyphicon glyphicon-trash"></span></a>

                            </th>
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




