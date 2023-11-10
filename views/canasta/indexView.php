<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Canasta&action=index" ?>">Precios</a></li>
            <li id="bread">Listar</li>
        </ul>
        <div class= "col-xs-12">
            <h4 class="text-center" id="bold">LISTAR PRECIOS</h4>
            <div class="text-center">
                <a href="index.php?controller=canasta&action=crearCanasta"><button type="button" class="btn btn-success">CREAR PRECIOS</button></a>
            </div>
            <hr>
            <table class="table">
                <tr>
                    <th class="col-md-2 hidden-sm hidden-xs" id="bold">Codigo</th>
                    <th class="col-md-2 col-xs-3 " id="bold">Nombre</th>
                    <th class="col-md-2 col-xs-3 " id="bold">Precio</th>
                    <th class="col-md-2 hidden-sm hidden-xs " id="bold">Fecha</th>
                    <th class="col-md-2 col-xs-3 hidden-xs" id="bold">Ciudad</th>
                    <th class="col-md-2 col-xs-3 " id="bold">Opciones</th>
                </tr>


                <?php
                if (isset($allCanasta)) { //viene de la clase canasta controller
                    foreach ($allCanasta as $row) { //recorremos el array de objetos y obtenemos el valor de las propiedades
                        ?>
                        <div class="row">
                            <tr>
                                <td class="col-md-2 hidden-sm hidden-xs "><?php echo $row->cta_codigo; ?></td>
                                <td class="col-md-2 col-xs-3 "><?php echo $row->cta_nombre; ?></td>
                                <td class="col-md-2 col-xs-3 "><?php echo $row->cta_precio; ?></td>
                                <td class="col-md-2 hidden-sm hidden-xs "><?php echo $row->cta_fecha; ?></td>
                                <td class="col-md-2 col-xs-3 hidden-xs"><?php echo $row->cta_ciudad; ?></td>
                                <th class="col-md-2 col-xs-3 ">
                                    <a href = "<?php echo "index.php?controller=Canasta&action=detailView&id=" . $row->cta_codigo; ?>" class="btn-lg"><span class="glyphicon glyphicon-search"></span></a>
                                    <a href = "<?php echo "index.php?controller=Canasta&action=editView&id=" . $row->cta_codigo; ?>" class="btn-lg"><span class="glyphicon glyphicon-edit"></span></a>
                                    <a class="eliminar_btn btn-lg" itemController="Canasta" itemEliminar="<?php echo $row->cta_codigo; ?>" controladorActual="Canasta" href="javascript:void(0);" data-toggle="modal" data-toggle="tooltip" data-target="#Eliminar" data-placement="bottom" title="Eliminar"><span class="glyphicon glyphicon-trash"></span></a>
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

