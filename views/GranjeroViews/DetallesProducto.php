<div id="prinAp" class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <h2 class="text-center" id="bold"><?php echo $selectedProducto->pro_nombre; ?></h2>
            <div class="col-xs-12">
                <div class="col-md-9">
                    <p><?php echo $selectedProducto->pro_descripcion; ?></P>
                </div>
                <div class="col-md-3 hidden-sm hidden-xs">
                    <div class="col-xs-12" style="height: 100px;">
                        <img src="uploads/imgAgricola<?php echo $selectedProducto->pro_foto; ?>" alt="foto pecuario" width="100%" height="100px">
                    </div>
                    <p id="bold">Estado:</p>
                    <p class="text-justify"><?php echo $selectedProducto->pro_estado; ?></p>
                    <p id="bold">Cantidad:</p>
                    <p class="text-justify"><?php echo $selectedProducto->pro_cantidad; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
