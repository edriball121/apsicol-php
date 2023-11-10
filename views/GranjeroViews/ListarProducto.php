<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Producto&action=indexProducto" ?>">Productos</a></li>
            <li id="bread">Listar</li>
        </ul>
        <h2 class="text-center" id="bold">LISTA DE PRODUCTOS</h2>
        <hr>
        <div class="col-xs-12">
            <?php
            if (isset($allProducto)) {
                foreach ($allProducto as $row) { //recorremos el array de objetos y obtenemos el valor de las propiedades 
                    ?>
                    <a href="<?php echo "index.php?controller=Producto&action=DetallesProducto&id=" . $row->pro_codigo; ?>">
                        <div  class="container" style="background-color: white; border-radius: 5px;">
                            <div class="col-xs-2">
                                <!--<img src="uploads/imgAgricola<?php echo $row->Ape_foto; ?>" alt="Foto Agricola" width="100%" height="200px;"/>-->
                                <img src="img/productos.jpg" alt="img temp" width="100%" height="150px;"/>
                            </div>
                            <div class="col-xs-10">
                                <h4><?php echo $row->pro_nombre; ?></h4>
                                <p>Cantidad: <?php echo $row->pro_cantidad; ?> </p>
                                <p>Estado: <?php echo $row->pro_estado; ?> </p>
                            </div>
                        </div>
                    </a>
                    <hr>
                    <?php
                }
            }
            ?>
        </div>  
    </div> 
</div>
