<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Consulta&action=index" ?>">Consulta</a></li>
            <li  id="bread">Listar</li>
        </ul>
        <div class="col-xs-12">
            <form action="" method="POST">
                <div>
                    <h4 class="text-center" id="bold">LISTAR CONSULTAS</h4>
                    <div class="text-center">
                        <a href="index.php?controller=consulta&action=crear"><button type="button" class="btn btn-success">CREAR CONSULTA</button></a>
                    </div>
                    <hr>
                </div>
                <table class="table">

                    <tr>
                        <td class="col-xs-2" id="bold">Radicado</td>
                        <td class="col-xs-3" id="bold">Nombre</td>
                        <td class="col-xs-2" id="bold">Tipo</td>
                        <td class="col-xs-2" id="bold">Fecha</td>
                        <td class="col-xs-3" id="bold">Opciones</td>
                    </tr>

                    <?php
                    if (isset($allConsulta)) {
                        foreach ($allConsulta as $row) { //recorremos el array de objetos y obtenemos el valor de las propiedades 
                            ?>
                            <tr>
                                <td class="col-md-2"><?php echo $row->con_radicado ?></td>
                                <td class="col-md-3"><?php echo $row->con_nombre; ?></td>
                                <td class="col-md-2"><?php echo $row->con_tipo_consulta; ?></td>
                                <td class="col-md-2"><?php echo $row->con_fecha; ?></td>
                                <td class="col-md-3">                        
                                    <a href = "<?php echo "index.php?controller=Consultor&action=detalle&id=" . $row->con_radicado; ?>" class="btn-lg"><span class="glyphicon glyphicon-search"></span></a>
                                    <a href = "<?php echo "index.php?controller=Consultor&action=editar&id=" . $row->con_radicado; ?>" class="btn-lg"><span class="glyphicon glyphicon-edit"></span></a> 
                                    <a class="eliminar_btn btn-lg" itemEliminar="<?php echo $row->con_radicado; ?>" controladorActual="Consulta" href="javascript:void(0);" data-toggle="modal"
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



