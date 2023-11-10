<div id="prinAp" class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <h4 class="text-center" id="bold"><?php echo $selectedNoticias->not_nombre; ?></h4>
            <hr>
            <div class="col-xs-12">
                <div class="col-md-9">
                    <p><?php echo $selectedNoticias->not_descripcion ?></P>
                </div>
                <div class="col-md-3 hidden-sm hidden-xs">
                    <div class="col-xs-12" style="height: 100px;">
                        <img src="uploads/imgAgricola<?php echo $selectedNoticias->not_foto; ?>" alt="foto agricola" width="100%" height="100px">
                    </div>
                    <p id="bold">Fuente:</p>
                    <p class="text-justify"><?php echo $selectedNoticias->not_url; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

