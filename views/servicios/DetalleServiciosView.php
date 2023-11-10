<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Servicios&action=index" ?>">Servicios</a></li>
            <li id="bread">Detalles</li>
        </ul>
        <?php
        if (isset($oneServicio)) {
            ?>
            <div class="col-xs-12">
                <h4 class="text-center" id="bold">DETALLES SERVICIO</h4>
                <hr>
                <table class="table table-hover">
                    <tr>
                        <th>Codigo</th>
                        <td><?php echo $oneServicio->ser_codigo; ?></td>
                    </tr>

                    <tr>
                        <th>Nombre</th>
                        <td><?php echo $oneServicio->ser_nombre; ?></td>
                    </tr>
                    
                    <tr>
                        <th>Valor</th>
                        <td><?php echo $oneServicio->ser_valor; ?></td>
                    </tr>

                    <tr>
                        <th>Descripcion</th>
                        <td><?php echo $oneServicio->ser_descripcion; ?></td>
                    </tr>

                    <tr>
                        <th>Foto</th>
                        <td><?php echo $oneServicio->ser_foto; ?></td>
                    </tr>

                </table>
            <?php } ?>
        </div>
    </div>
</div>

