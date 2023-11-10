<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Granjero&action=index" ?>">Granjero</a></li>
            <li id="bread">Detalles</li>
        </ul>
        <?php
        if (isset($selectedGranjero)) {
            
        }
        ?>
        <div class="col-xs-12">
            <h4 class="text-center" id="bold">DETALLES GRANJERO</h4>
            <hr>
            <form action = "<?php echo "index.php?controller=granjero&action=index"; ?>" method="post">
                <table class="table table-hover">
                    <tr> 
                        <td id="bold">Cedula:</td>
                        <td> <?php echo $selectedGranjero->gra_cedula; ?></td>
                    </tr>
                    <tr>
                        <td id="bold">Nombre:</td>
                        <td><?php echo $selectedGranjero->gra_nombre; ?></td>
                    </tr>
                    <tr>
                        <td id="bold"> Apellido: </td>
                        <td><?php echo $selectedGranjero->gra_apellido; ?></td>
                    </tr>
                    <tr>
                        <td> Password: </td>
                        <td><?php echo $selectedGranjero->gra_password; ?></td>
                    </tr>
                    <tr>
                        <td id="bold">  Telefono:</td>
                        <td><?php echo $selectedGranjero->gra_telefono; ?></td>
                    </tr>
                    <tr>
                        <td id="bold"> Email: </td>
                        <td><?php echo $selectedGranjero->gra_email; ?></td>
                    </tr>
                    <tr>
                        <td id="bold"> Dirección: </td>
                        <td><?php echo $selectedGranjero->gra_direccion; ?></td>
                    </tr>
                    <tr>
                        <td id="bold"> Fecha de Nacimiento: </td>
                        <td><?php echo $selectedGranjero->gra_fecha_nacimiento; ?></td>
                    </tr>
                    <tr>
                        <td id="bold">  Perfil laboral:</td>
                        <td><?php echo $selectedGranjero->gra_perfil_laboral; ?></td>
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
