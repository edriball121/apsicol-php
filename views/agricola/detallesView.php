<div id="prinAp"class="container-fluid">
    <div class="row">    
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Agricola&action=index" ?>">Agricola</a></li>
            <li id="bread">Detalle</li>
        </ul>
        <div class="col-xs-12">
            <form action =
                  "<?php
                  echo "index.php?controller=Agricola&action=index";
                  ?>"
                  method="post">
                <h4 class="text-center" id="bold">DETALLES AGRICOLA</h4>
                <hr/>
                <table class="table table-hover">

                    <tr> 
                        <td id="bold">Codigo:</td>
                        <td> <?php
                            echo $oneagricolapecuario->Ape_codigo;
                            ?></td>
                    </tr>

                    <tr>
                        <td id="bold">Nombre:</td>
                        <td><?php
                            echo $oneagricolapecuario->Ape_nombre;
                            ?></td>
                    </tr>

                    <tr>
                        <td id="bold">Tipo:</td>
                        <td><?php
                            echo $oneagricolapecuario->Ape_tipo;
                            ?></td>
                    </tr>

                    <tr>
                        <td id="bold">Foto:</td>
                        <td><?php
                            echo $oneagricolapecuario->Ape_Foto;
                            ?></td>
                    </tr>

                    <tr>
                        <td id="bold">Descripcion:</td>
                        <td><?php
                            echo $oneagricolapecuario->Ape_Descripcion;
                            ?></td>
                    </tr>
                </table> 
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
</div>
