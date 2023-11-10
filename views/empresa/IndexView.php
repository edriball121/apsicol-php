<div id="prinAp" class="container-fluid" >
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Empresa&action=index" ?>">Empresa</a></li>
            <li id="bread">Listar</li>
        </ul>

        <form action="" method="POST">
            <h4 class="text-center" id="bold">LISTAR EMPRESAS</h4>
            <div class="text-center">
                <a href="index.php?controller=empresa&action=crear"><button type="button" class="btn btn-success">CREAR EMPRESA</button></a>
            </div>
            <hr>
            <table class="table">
                <tr>
                <td class="col-sm-2 hidden-xs" id="bold">Codigo</td>
                <td class="col-sm-3 col-xs-4" id="bold">Nombre</td>
                <td class="col-sm-2 hidden-xs" id="bold">Telefono</td>
                <td class="col-sm-2 hidden-xs" id="bold">foto</td>
                <td class="col-sm-3 col-xs-8" id="bold">Opciones</td>
                </tr>
                <?php
                if (isset($allEmpresas)) {
                    foreach ($allEmpresas as $row) { //recorremos el array de objetos y obtenemos el valor de las propiedades 
                        ?>
                        <tr>
                        <td class="col-sm-2 hidden-xs "><?php echo $row->emp_codigo; ?></td>
                        <td class="col-sm-3 col-xs-4 "><?php echo $row->emp_nombre; ?></td>
                        <td class="col-sm-2 hidden-xs "><?php echo $row->emp_telefono; ?></td>
                        <td class="col-sm-2 hidden-xs "><?php echo $row->emp_foto; ?></td>
                        <td class="col-sm-3 col-xs-8 ">                        

                            <a href = "<?php echo "index.php?controller=Empresa&action=detalle&id=" . $row->emp_codigo; ?>" class="btn-lg"><span class="glyphicon glyphicon-search"></span></a>
                            <a href = "<?php echo "index.php?controller=Empresa&action=editar&id=" . $row->emp_codigo; ?>" class="btn-lg"><span class="glyphicon glyphicon-edit"></span></a> 
                            <a class="eliminar_btn btn-lg" itemEliminar="<?php echo $row->emp_codigo; ?>" controladorActual="Empresa" href="javascript:void(0);" data-toggle="modal"
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


