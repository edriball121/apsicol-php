<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=administrador&action=crearAdministrador" ?>">Administrador</a></li>
            <li id="bread">Listar</li>
        </ul>

        <h4 class="text-center" id="bold">LISTAR ADMINISTRADOR</h4>
        <div class="text-center">
            <a href="index.php?controller=administrador&action=crearAdministrador"><button type="button" class="btn btn-success">CREAR ADMINISTRADOR</button></a>
        </div>
        <hr>
        <table class="table">

            <tr>
            <th class="col-md-2 con-xs-4">Cedula</th>
                <th class="col-md-2 con-xs-4">Nombre</th>
                <th class="col-md-2 hidden-xs">Apellido</th>
                <th class="col-md-2 hidden-xs">Telefono</th>
                <th class="col-md-2 hidden-xs">Rol</th>
                <th class="col-md-2 con-xs-4">Opciones</th>
            </tr>
            <?php
if (isset($allAdministrador)) { //viene de la clase producto controller
    foreach ($allAdministrador as $row) { //recorremos el array de objetos y obtenemos el valor de las propiedades
        ?>
        <div class="row">
           <tr>
                <td class="col-md-2 con-xs-4"><?php echo $row->adm_cedula; ?></td>
                <td class="col-md-2 col-xs-4"><?php echo $row->adm_nombre; ?></td>
                <td class="col-md-2 hidden-xs"><?php echo $row->adm_apellido; ?></td>
                <td class="col-md-2 hidden-xs"><?php echo $row->adm_telefono; ?></td>
                <td class="col-md-2 hidden-xs"><?php echo $row->adm_rol; ?></td>
                <th class="col-md-2 con-xs-4">
                    <a href = "<?php echo "index.php?controller=Administrador&action=detailView&id=" . $row->adm_cedula; ?>" class="btn-lg"><span class="glyphicon glyphicon-search"></span></a>
                    <a href = "<?php echo "index.php?controller=Administrador&action=editView&id=" . $row->adm_cedula; ?>" class="btn-lg"><span class="glyphicon glyphicon-edit"></span></a>
                    <a class="eliminar_btn btn-lg" itemController="Administrador" itemEliminar="<?php echo $row->adm_cedula; ?>" controladorActual="Administrador" href="javascript:void(0);" data-toggle="modal" data-toggle="tooltip" data-target="#Eliminar" data-placement="bottom" title="Eliminar"><span class="glyphicon glyphicon-trash"></span></a>
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





