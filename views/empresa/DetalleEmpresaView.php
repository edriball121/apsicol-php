<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Empresa&action=index" ?>">Empresa</a></li>
            <li id="bread">Detalles</li>
        </ul>
        <?php
        if (isset($oneEmpresa)) {
            ?>

            <div class="col-xs-12" >
                <form action = "<?php echo "index.php?controller=Empresa&action=index"; ?>" method="post">
                    <h4 class="text-center" id="bold">DETALLES EMPRESA</h4>
                    <hr>
                    <table class="table table-hover">
                        <tr>
                            <th>Codigo</th>
                            <td><?php echo $oneEmpresa->emp_codigo; ?></td>
                        </tr>

                        <tr>
                            <th>Nombre</th>
                            <td><?php echo $oneEmpresa->emp_nombre; ?></td>
                        </tr>

                        <tr>
                            <th>Descripcion</th>
                            <td><?php echo $oneEmpresa->emp_descripcion; ?></td>
                        </tr>

                        <tr>
                            <th>Telefono</th>
                            <td><?php echo $oneEmpresa->emp_telefono; ?></td>
                        </tr>

                        <tr>
                            <th>Foto</th>
                            <td><?php echo $oneEmpresa->emp_foto; ?></td>
                        </tr>

                    </table>

                </form>
            <?php } ?>
        </div>
    </div>
</div>

