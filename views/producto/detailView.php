<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Producto&action=index" ?>">Producto</a></li>
            <li id="bread">Detalles</li>
        </ul>
        <?php
        if (isset($selectedProducto)) {
            
        }
        ?>
        <div class="col-xs-12">
            <h4 class="text-center" id="bold">DETALLES PRODUCTO</h4>
            <hr>
            <form action = "<?php echo "index.php?controller=Producto&action=index"; ?>" method="post">
                <table class="table table-hover">
                    <tr> 
                        <td id="bold">Codigo:</td>
                        <td> <?php echo $selectedProducto->pro_codigo; ?></td>
                    </tr>
                    <tr>
                        <td id="bold">Nombre:</td>
                        <td><?php echo $selectedProducto->pro_nombre; ?></td>
                    </tr>
                    <tr>
                        <td id="bold"> Descripcion: </td>
                        <td><?php echo $selectedProducto->pro_descripcion; ?></td>
                    </tr>
                    <tr>
                        <td id="bold"> Precio: </td>
                        <td><?php echo $selectedProducto->pro_precio; ?></td>
                    </tr>
                    <tr>
                        <td id="bold"> Estado:</td>
                        <td><?php echo $selectedProducto->pro_estado; ?></td>
                    </tr>
                    <tr>
                        <td id="bold"> Cantidad: </td>
                        <td><?php echo $selectedProducto->pro_cantidad; ?></td>
                    </tr>
                    <tr>
                        <td id="bold"> Terminos y condiciones: </td>
                        <td><?php echo $selectedProducto->pro_terminos_y_condiciones; ?></td>
                    </tr>
                    <tr>
                        <td id="bold"> Foto: </td>
                        <td><?php echo $selectedProducto->pro_foto; ?></td>
                    </tr>

                </table>        
        </div>
    </div>
    <div id="Eliminar" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Eliminar Elemento</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <h5><p>¿Desea eliminar el registro?</h5></p>
                </div>
                <div class="modal-footer">
                    <input type="submit" id="btn_eliminar_modal" class="btn btn-danger eliminar" data-dismiss="modal" data-toggle="modal" value="Aceptar">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>

