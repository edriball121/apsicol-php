<div id="prinAp" class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <h2 class="text-center" id="bold"><?php echo $oneagricola->Ape_nombre; ?></h2>
            <div class="col-xs-12">
                <div class="col-md-9">
                    <p><?php echo $oneagricola->Ape_Descripcion; ?></P>
                </div>
                <div class="col-md-3 hidden-sm hidden-xs">
                    <div class="col-xs-12" style="height: 100px;">
                        <img src="uploads/imgAgricola<?php echo $oneagricola->Ape_Foto; ?>" alt="foto agricola" width="100%" height="100px">
                    </div>
                    <p id="bold">tipo:</p>
                    <p class="text-justify"><?php echo $oneagricola->Ape_tipo; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

