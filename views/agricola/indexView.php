<d col-xsiv id="prinAp" class="container-fluid">
    <div class="row">    
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Agricola&action=index" ?>">Agricola</a></li>
            <li id="bread">Listar</li>
        </ul>
        <div class="col-xs-12">
            <h4 class="text-center" id="bold">LISTAR AGRICOLA</h4>
            <div class="text-center">
                <a href="index.php?controller=agricola&action=crear"><button type="button" class="btn btn-success">CREAR AGRICOLA</button></a>
            </div>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <td class="col-sm-3 hidden-xs" id="bold">Codigo:</td>
                        <td class="col-sm-3 col-xs-3" id="bold">Nombre:</td>
                        <td class="col-sm-3 col-xs-3" id="bold">Tipo:</td>
                        <td class="col-sm-3 col-xs-6" id="bold">Opciones:</td>

                    </tr>
                    <?php
                    if (isset($allagricolapecuario)) {
                        foreach ($allagricolapecuario as $row) { //recorremos el array de objetos y obtenemos el valor de las propiedades
                            ?>

                        <tbody>

                            <tr>
                                <td class="col-sm-3 hidden-xs"> 
                                    <?php echo $row->Ape_codigo; ?>
                                </td>

                                <td class="col-sm-3 col-xs-3">
                                    <?php echo $row->Ape_nombre; ?>
                                </td>


                                <td class="col-sm-3 col-xs-3">
                                    <?php echo $row->Ape_tipo; ?>
                                </td>

                                <td class="col-sm-3 col-xs-6">
                                    <a href="<?php echo " index.php?controller=Agricola&action=ver&id=" . $row->Ape_codigo; ?>" class="btn-lg">
                                        <span class="glyphicon glyphicon-search"></span></a>

                                    <a href="<?php echo "index.php?controller=Agricola&action=editView&id=" . $row->Ape_codigo; ?>" class="btn-lg">
                                        <span class="glyphicon glyphicon-edit"></span></a> 

                                    <a class="eliminar_btn btn-lg" itemEliminar="<?php echo $row->Ape_codigo; ?>" controladorActual="Agricola" href="javascript:void(0);" data-toggle="modal"
                                       data-toggle="tooltip" data-target="#Eliminar" data-placement="bottom" title="Eliminar">
                                        <span class="glyphicon glyphicon-trash"></span></a>

                                </td>
                            </tr>
                        </tbody>
                        </thead>

                        <?php
                    }
                }
                ?>
            </table>
        </div>


        <!--Eliminar-->

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




