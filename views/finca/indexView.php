sm<d col-xs-iv id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Finca&action=index" ?>">Finca</a></li>
            <li id="bread">Listar</li>
        </ul>
        <div class="col-xs-12">
            <h4 class="text-center" id="bold">LISTAR FINCA</h4>
            <div class="text-center">
                <a href="index.php?controller=fincas&action=crear"><button type="button" class="btn btn-success">CREAR FINCA</button></a>
            </div>
            <hr style="border: 1px solid black">
            <table class="table">
                <tr>
                    <th class="col-sm-2 hidden-xs">Codigo</th>
                    <th class="col-sm-2 col-xs-4">Nombre</th>
                    <th class="col-sm-2 hidden-xs">Telefono</th>
                    <th class="col-sm-4 col-xs-4">Opciones</th>
                </tr>

                <?php
                if (isset($allfinca)) {
                    foreach ($allfinca as $row) { //recorremos el array de objetos y obtenemos el valor de las propiedades
                        ?>
                        <tr>
                            <th class="col-sm-2 hidden-xs"><?php echo $row->Fin_codigo ?></th>
                            <td class="col-sm-2 col-xs-4"><?php echo $row->Fin_nombre; ?></td>
                            <td class="col-sm-2 hidden-xs"><?php echo $row->Fin_Telefono; ?></td>
                            <td class="col-sm-4 col-xs-4">
                                <a href="<?php echo " index.php?controller=Fincas&action=ver&id=" . $row->Fin_codigo; ?>" class="btn-lg">
                                    <span class="glyphicon glyphicon-search"></span>
                                </a>
                                <a href="<?php echo " index.php?controller=Fincas&action=editView&id=" . $row->Fin_codigo; ?>" class="btn-lg">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                <a class="eliminar_btn btn-lg" itemEliminar="<?php echo $row->Fin_codigo; ?>" controladorActual="fincas" href="javascript:void(0);" data-toggle="modal"
                                   data-toggle="tooltip" data-target="#Eliminar" data-placement="bottom" title="Eliminar">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                                
                            </td>

                        </tr>
                </div>
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
</div>  <!-- row -->
</div>
