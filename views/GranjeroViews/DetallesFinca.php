<div id="prinAp" class="container-fluid"><!--contenedor-->
    <div class="row"><!--row-->
        <h4 class="text-center" id="bold"><?php echo $onefinca->Fin_nombre; ?></h4>
        <hr>
        <?php
        if (isset($onefinca)) {
            ?>
            <div class="col-xs-12">
                <div class="col-xs-9">
                    <p><?php echo $onefinca->Fin_Descripcion; ?></p>
                </div>
                <div class="col-xs-3">
                    <img src="uploads/imgEmpresas<?php echo $onefinca->emp_foto; ?>" alt="imagen Empresa" width="100%" height="200px;"/>
                    <p id="bold">Tamaño: </p>
                    <p><?php echo $onefinca->Fin_tamanno; ?></p>

                    <p id="bold">Direccion: </p>
                    <p><?php echo $onefinca->Fin_direccion; ?></p>

                    <p id="bold">Tipos de productos: </p>
                    <p><?php echo $onefinca->Fin_productos; ?></p>

                    <p id="bold">Telefono: </p>
                    <p><?php echo $onefinca->Fin_telefono; ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
