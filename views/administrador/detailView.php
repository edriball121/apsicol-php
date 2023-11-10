<div id="prinAp" class="container-flid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Administrador&action=index" ?>">Administrador</a></li>
            <li id="bread">Detalles</li>
        </ul>
        <?php
        if (isset($selectedAdministrador)) {
            
        }
        ?>
        <div class="col-xs-12">
            <form action = "<?php echo "index.php?controller=administrador&action=index"; ?>" method="post">
                <h4 class="text-center" id="bold">DETALLES ADMINISTRADOR</h4>
                <hr/>
                <table class="table table-hover">
                    <tr > 
                        <td><b>Cedula:</b></td>
                        <td> <?php echo $selectedAdministrador->adm_cedula; ?></td>
                    </tr>
                    <tr>
                        <td><b>Nombre:</b></td>
                        <td><?php echo $selectedAdministrador->adm_nombre; ?></td>
                    </tr>
                    <tr>
                        <td> <b>Apellido:</b> </td>
                        <td><?php echo $selectedAdministrador->adm_apellido; ?></td>
                    </tr>
                    <tr>
                        <td> <b>Password:</b> </td>
                        <td><?php echo $selectedAdministrador->adm_password; ?></td>
                    </tr>
                    <tr>
                        <td> <b> Telefono:</b></td>
                        <td><?php echo $selectedAdministrador->adm_telefono; ?></td>
                    </tr>
                    <tr>
                        <td> <b>Email:</b> </td>
                        <td><?php echo $selectedAdministrador->adm_email; ?></td>
                    </tr>
                    <tr>
                        <td> <b>Dirección:</b> </td>
                        <td><?php echo $selectedAdministrador->adm_direccion; ?></td>
                    </tr>
                    <tr>
                        <td> <b>Fecha de Nacimiento:</b> </td>
                        <td><?php echo $selectedAdministrador->adm_fecha_nacimiento; ?></td>
                    </tr>
                    <tr>
                        <td> <b> Rol:</b></td>
                        <td><?php echo $selectedAdministrador->adm_rol; ?></td>
                    </tr>
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


