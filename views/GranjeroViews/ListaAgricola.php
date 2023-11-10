<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Agricola&action=index" ?>">Agricola</a></li>
            <li id="bread">Listar</li>
        </ul>
        <h2 class="text-center" id="bold">LISTA DE PRODUCTOS AGRICOLAS</h2>
        <hr>

        <?php
        if (isset($allagricola)) {
            foreach ($allagricola as $row) { //recorremos el array de objetos y obtenemos el valor de las propiedades
                ?>
                <div class="col-xs-12">
                    <a href = "<?php echo " index.php?controller=Agricola&action=DetallesAgricola&id=" . $row->Ape_codigo; ?>">
                        <div  class="container" style="background-color: white; border-radius: 5px;">
                            <div class="col-xs-2">
                                <!--<img src="uploads/imgAgricola<?php echo $row->Ape_foto; ?>" alt="Foto Agricola" width="100%" height="200px;"/>-->
                                <img src="img/agricola.png" alt="img temp" width="100%" height="150px;"/>
                            </div>
                            <div class="col-xs-10">
                                <h2><?php echo $row->Ape_nombre; ?> </h2>
                                <h4><?php echo $row->Ape_tipo; ?> </h4>
                            </div>
                        </div>
                    </a>
                    <hr>
                </div>
                
                <?php
            }
        }
        ?>

    </div> 
</div>