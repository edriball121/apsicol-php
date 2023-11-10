<div class="container-fluid" id="prinAp">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Consultor&action=index" ?>">Consultor</a></li>
            <li id="bread">Detalles</li>
        </ul>
        <?php
        if (isset($oneConsultor)) {
            ?>
            <div class="col-xs-12">
                <form action = "<?php echo "index.php?controller=Consultor&action=index"; ?>" method="post">
                    <h4 class="text-center" id="bold">DETALLES CONSULTOR</h4>
                    <hr>
                    <table class="table table-hover">
                        <tr>
                            <th>Cedula</th>
                            <td><?php echo $oneConsultor->con_cedula; ?></td>
                        </tr>

                        <tr>
                            <th>Nombre</th>
                            <td><?php echo $oneConsultor->con_nombre; ?></td>
                        </tr>

                        <tr>
                            <th>Apellido</th>
                            <td><?php echo $oneConsultor->con_apellido; ?></td>
                        </tr>

                        <tr>
                            <th>Contraseña</th>
                            <td><?php echo $oneConsultor->con_password; ?></td>
                        </tr>

                        <tr>
                            <th>Telefono</th>
                            <td><?php echo $oneConsultor->con_telefono; ?></td>
                        </tr>

                        <tr>
                            <th>Email</th>
                            <td><?php echo $oneConsultor->con_email; ?></td>
                        </tr>

                        <tr>
                            <th>Direccion</th>
                            <td><?php echo $oneConsultor->con_direccion; ?></td>
                        </tr>

                        <tr>
                            <th>Fecha de nacimiento</th>
                            <td><?php echo $oneConsultor->con_fecha_nacimiento; ?></td>
                        </tr>

                        <tr>
                            <th>Profesion</th>
                            <td><?php echo $oneConsultor->con_profesion; ?></td>
                        </tr>

                        <tr>
                            <th>Años de experiencia</th>
                            <td><?php echo $oneConsultor->con_annos_experiencia; ?></td>
                        </tr>

                    </table>

                </form>
            <?php } ?>
        </div>
    </div>
</div>

