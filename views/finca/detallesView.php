<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Fincas&action=index" ?>">Fincas</a></li>
            <li id="bread">Detalle</li>
        </ul>

        <div class="col-xs-12">
            <h4 class="text-center" id="bold">DETALLES FINCA</h4>
            <hr>
            <table class="table table-hover">
                <tr> 
                    <td id="bold">Codigo:</td>
                    <td> <?php
                        echo $onefinca->Fin_codigo;
                        ?></td>
                </tr>

                <tr>
                    <td id="bold">Nombre:</td>
                    <td><?php
                        echo $onefinca->Fin_nombre;
                        ?></td>
                </tr>

                <tr>
                    <td id="bold"> Tamaño: </td>
                    <td><?php
                        echo $onefinca->Fin_tamanno;
                        ?></td>
                </tr>

                <tr>
                    <td id="bold"> direccion: </td>
                    <td><?php
                        echo $onefinca->Fin_direccion;
                        ?></td>
                </tr>

                <tr>
                    <td id="bold"> foto: </td>
                    <td><?php
                        echo $onefinca->Fin_foto;
                        ?></td>
                </tr>

                <tr>
                    <td id="bold"> productos: </td>
                    <td><?php
                        echo $onefinca->Fin_productos;
                        ?></td>
                </tr>

                <tr>
                    <td id="bold"> tenefono: </td>
                    <td><?php
                        echo $onefinca->Fin_Telefono;
                        ?></td>
                </tr>

                <tr>
                    <td id="bold"> Descripcion: </td>
                    <td><?php
                        echo $onefinca->Fin_Descripcion;
                        ?></td>
                </tr>
            </table>

        </div>


    </div>


    <div id="Eliminar"
         class="modal fade"
         role="dialog">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header">

                    <h3>Eliminar Elemento</h3>

                    <button type="button"
                            class="close"
                            data-dismiss="modal">&times;</button>

                </div>

                <div class="modal-body">

                    <h5><p>¿Desea eliminar el registro?</h5></p>

                </div>

                <div class="modal-footer">

                    <input type="submit"
                           id="btn_eliminar_modal"
                           class="btn btn-danger eliminar"
                           data-dismiss="modal"
                           data-toggle="modal"
                           value="Aceptar">

                    <button type="button"
                            class="btn btn-default"
                            data-dismiss="modal">Cancelar</button>

                </div>

            </div>

        </div>
    </div>
</div>
