<div id="prinAp" class="container-fluid"><!--contenedor-->
    <div class="row"><!--row-->
        <?php
        if (isset($oneEmpresa)) {
            ?>
        <h4 class="text-center" id="bold"><?php echo $oneEmpresa->emp_nombre; ?></h4>
        <hr>
            <div class="col-xs-12">
                <div class="col-xs-9">
                    <p>
                        <?php echo $oneEmpresa->emp_descripcion; ?>
                    </p>
                </div>
                <div class="col-xs-3 text-center">
                    <img src="uploads/imgEmpresas/<?php echo $oneEmpresa->emp_foto; ?>" alt="imagen Empresa" width="100%" height="200px;"/>
                    <hr>
                    <p id="bold">Telefonos:</p>
                    <p>
                        <?php echo $oneEmpresa->emp_telefono; ?>
                    </p>
                </div>
            </div>
        <?php } ?><!--fin empresas-->


    </div>
</div>


