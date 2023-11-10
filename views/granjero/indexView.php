<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Granjero&action=index" ?>">Granjero</a></li>
            <li id="bread">Listar</li>
        </ul>
        <div class="col-xs-12">
            <h4 class="text-center" id="bold">LISTAR GRANJERO</h4>
            <div class="text-center">
                <a href="index.php?controller=granjero&action=creargranjero"><button type="button" class="btn btn-success">CREAR GRANJERO</button></a>
            </div>
            <hr style="border: 1px solid black">
            <table class="table table-hover">
                <th class="col-md-2 con-xs-4">Cedula</th>
                <th class="col-md-2 con-xs-4">Nombre</th>
                <th class="col-md-2 hidden-xs">Apellido</th>
                <th class="col-md-2 hidden-xs">Direccion</th>
                <th class="col-md-2 hidden-xs">Email</th>
                <th class="col-md-2 con-xs-4">Opciones</th>
                <?php
                if (isset($allGranjero)) { //viene de la clase granjero controller
                    foreach ($allGranjero as $row) { //recorremos el array de objetos y obtenemos el valor de las propiedades
                        ?>
                        <div class="row">
                            <tr>
                                <td class="col-md-2 con-xs-4"><?php echo $row->gra_cedula; ?></td>
                                <td class="col-md-2 con-xs-4"><?php echo $row->gra_nombre; ?></td>
                                <td class="col-md-2 hidden-xs"><?php echo $row->gra_apellido; ?></td>
                                <td class="col-md-2 hidden-xs"><?php echo $row->gra_direccion; ?></td>
                                <td class="col-md-2 hidden-xs"><?php echo $row->gra_email; ?></td>
                                <th class="col-md-2 con-xs-4">
                                    <a href = "<?php echo "index.php?controller=Granjero&action=detailView&id=" . $row->gra_cedula; ?>" class="btn-lg"><span class="glyphicon glyphicon-search white"></span></a>
                                    <a href = "<?php echo "index.php?controller=Granjero&action=editView&id=" . $row->gra_cedula; ?>" class="btn-lg"><span class="glyphicon glyphicon-edit"></span></a>
                                    <a class="eliminar_btn btn-lg" itemEliminar="<?php echo $row->gra_cedula; ?>" controladorActual="Granjero" href="javascript:void(0);" data-toggle="modal"
                                   data-toggle="tooltip" data-target="#Eliminar" data-placement="bottom" title="Eliminar">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                                </th>
                            </tr>

                        </div>
                        <?php
                    }
                }
                ?>

            </table>
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
</div>


