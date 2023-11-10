<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Noticias&action=indexNoticias" ?>">Noticias</a></li>
            <li id="bread">Listar</li>
        </ul>
        <h2 class="text-center" id="bold">LISTA DE NOTICIAS</h2>
        <hr>
        <div class="col-xs-12">
            <?php
            if (isset($allNoticias)) {
                foreach ($allNoticias as $row) { //recorremos el array de objetos y obtenemos el valor de las propiedades 
                    ?>
                    <a href="<?php echo "index.php?controller=Noticias&action=detalleNoticias&id=" . $row->not_codigo; ?>">
                        <div  class="container" style="background-color: white; border-radius: 5px;">
                            <div class="col-xs-2">
                                <!--<img src="uploads/imgAgricola<?php echo $row->Ape_foto; ?>" alt="Foto Agricola" width="100%" height="200px;"/>-->
                                <img src="img/noticias.jpg" alt="img temp" width="100%" height="150px;"/>
                            </div>
                            <div class="col-xs-10">
                                <h2><?php echo $row->not_nombre; ?></h2>
                                <h4><?php echo $row->not_subtitulo; ?></h4> 
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


