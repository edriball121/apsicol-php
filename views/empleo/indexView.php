 <div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Empleo&action=index" ?>">Empleo</a></li>
            <li id="bread">Listar</li>
        </ul>

        <div class="col-xs-12">
            <h4 class="text-center" id="bold">LISTAR EMPLEO</h4>
            <div class="text-center">
                <a href="index.php?controller=empleo&action=crear"><button type="button" class="btn btn-success">CREAR EMPLEO</button></a>
            </div>
            <hr>
            <table class="table">
                <tr>
                    <td class="col-sm-3 hidden-xs" id="bold">Codigo</td>
                    <td class="col-sm-3 col-xs-4" id="bold">Nombre</td>
                    <td class="col-sm-3 hidden-sm hidden-xs" id="bold">Descripcion</td>
                    <td class="col-sm-3 col-xs-8" id="bold">Opciones</td>
                </tr>
                <?php
                if (isset($allempleo)) {
                    foreach ($allempleo as $row) { //recorremos el array de objetos y obtenemos el valor de las propiedades
                        ?>
                        <tr>

                            <td class="col-sm-3 hidden-xs">
                                <?php echo $row->Emp_codigo; ?>
                            </td>

                            <td class="col-sm-3 col-xs-4">
                                <?php echo $row->Emp_Nombre; ?>
                            </td>


                            <td class="col-sm-3 hidden-sm hidden-xs">
                                <?php echo $row->Emp_Descripcion; ?>
                            </td>

                            <td class="col-sm-3 col-xs-8">
                                <a href="<?php echo " index.php?controller=Empleo&action=ver&id=" . $row->Emp_codigo; ?>" class="btn-lg">
                                    <span class="glyphicon glyphicon-search"></span>
                                </a>
                                <a href="<?php echo "index.php?controller=Empleo&action=editView&id=" . $row->Emp_codigo; ?>" class="btn-lg">
                                    <span class="glyphicon glyphicon-edit"></span>
                                <a class="eliminar_btn btn-lg" itemEliminar="<?php echo $row->Emp_codigo; ?>" controladorActual="Empleo" href="javascript:void(0);" data-toggle="modal"
                                   data-toggle="tooltip" data-target="#Eliminar" data-placement="bottom" title="Eliminar">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                                
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