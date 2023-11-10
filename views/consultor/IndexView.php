sm<d col-xs-3iv id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Consultor&action=index" ?>">Consultor</a></li>
            <li  id="bread">Listar</li>
        </ul>
        <div class="col-xs-12">
            <form action="" method="POST">
                <div>
                    <h4 class="text-center" id="bold">LISTAR CONSULTOR</h4>
                    <div class="text-center">
                        <a href="index.php?controller=consultor&action=crear"><button type="button" class="btn btn-success">CREAR CONSULTOR</button></a>
                    </div>
                    <hr>
                </div>
                <table class="table">

                    <tr>
                        <td class="col-sm-2 hidden-xs" id="bold">Documento</td>
                        <td class="col-sm-3 col-xs-6" id="bold">Nombre</td>
                        <td class="col-sm-2 hidden-xs" id="bold">Telefono</td>
                        <td class="col-sm-2 hidden-xs" id="bold">Eps</td>
                        <td class="col-sm-3 col-xs-6" id="bold">Opciones</td>
                    </tr>
                    <?php
                    if (isset($allConsultores)) {
                        foreach ($allConsultores as $row) { //recorremos el array de objetos y obtenemos el valor de las propiedades 
                            ?>
                            <tr>
                            <td class="col-sm-2 hidden-xs"><?php echo $row->con_cedula ?></td>
                            <td class="col-sm-3 col-xs-6 "><?php echo $row->con_nombre; ?></td>
                            <td class="col-sm-2 hidden-xs "><?php echo $row->con_telefono; ?></td>
                            <td class="col-sm-2 hidden-xs "><?php echo $row->con_profesion; ?></td>
                            <td class="col-sm-3 col-xs-6">                        

                                <a href = "<?php echo "index.php?controller=Consultor&action=detalle&id=" . $row->con_cedula; ?>" class="btn-lg"><span class="glyphicon glyphicon-search"></span></a>
                                <a href = "<?php echo "index.php?controller=Consultor&action=editar&id=" . $row->con_cedula; ?>" class="btn-lg"><span class="glyphicon glyphicon-edit"></span></a> 
                                <a class="eliminar_btn btn-lg" itemEliminar="<?php echo $row->con_cedula; ?>" controladorActual="Consultor" href="javascript:void(0);" data-toggle="modal"
                                   data-toggle="tooltip" data-target="#Eliminar" data-placement="bottom" title="Eliminar"><span class="glyphicon glyphicon-trash"></span>

                                </a>
                            </td>
                            </tr>
                            <?php
                        }
                    }
                    ?>   
            </form>
            </table>
            <hr>
        </div>

        <div id="Eliminar" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3>Eliminar Elemento</h3>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <h5>
                            <p>¿Desea eliminar el registro?</h5>
                        </p>
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



