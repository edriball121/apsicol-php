<div id="principal" class="container-fluid"><!--contenedor-->
    <div class="row"><!--row-->
        <!--inicio carousel-->
        <h1 align="center" id="white-titulos">Noticias</h1>
        <hr>
        <div id="myCarousel" class="container carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/1.jpg" alt="Los Angeles" >
                </div>

                <div class="item">
                    <img src="img/2.jpg" alt="Chicago">
                </div>

                <div class="item">
                    <img src="img/3.jpg" alt="New York">
                </div>
                <div class="item">
                    <img src="img/4.jpg" alt="New York">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!--fin carousel-->

        <!--inicio menu-->
        <h1 align="center" id="white-titulos">Menu</h1>
        <hr>
        <div class="col-xs-12">
            <div class="col-md-3 col-md-4 col-sm-6 col-xs-12">
                <a href="<?php echo "index.php?controller=Agricola&action=indexAgricola" ?>">
                    <img src="img/menu/agricola.png" alt="Agricola" class="img-responsive"/>
                </a>
                <hr>
            </div>
            <div class="col-md-3 col-md-4 col-sm-6 col-xs-12">
                <a href="<?php echo "index.php?controller=Pecuario&action=indexPecuario" ?>">
                    <img src="img/menu/pecuario.png" alt="Pecuario" class="img-responsive"/>
                </a>
                <hr>
            </div>

            <div class="col-md-3 col-md-4 col-sm-6 col-xs-12">
                <a href="<?php echo "index.php?controller=Canasta&action=indexCanasta" ?>">
                    <img src="img/menu/precios.png" alt="Empleo" class="img-responsive"/>
                </a>
                <hr>
            </div>

            <div class="col-md-3 col-md-4 col-sm-6 col-xs-12">
                <a href="<?php echo "index.php?controller=Empresa&action=indexEmpresa" ?>">
                    <img src="img/menu/precision.png" alt="Precios" class="img-responsive"/>
                </a>
                <hr>
            </div>
        </div>
        <!--fin menu-->

        <!--inicio otras noticias-->
        <h1 align="center" id="white-titulos">Otras Noticias</h1>
        <hr>
        <?php
        if (isset($noticias_inicio)) { //viene de la clase producto controller
            foreach ($noticias_inicio as $row) { //recorremos el array de objetos y obtenemos el valor de las propiedades
                ?>
                <div class="col-xs-12">
                    <div class="container" style="background-color: white; border-radius: 5px;">
                        <div class="col-md-2 col-xs-4">
                            <!--<img src="uploads/imgNoticias<?php echo $row->not_foto; ?>" alt="" width="100%" height="60px"/>-->
                            <img src="img/noticias.jpg" alt="img temp" width="100%" height="150px;"/>
                        </div>
                        <div class="col-md-10 col-xs-8">
                            <h2><?php echo $row->not_nombre; ?></h2>
                            <h4><?php echo $row->not_subtitulo; ?></h4>
                        </div>
                    </div>
                    <br>
                </div>
                <?php
            }
        }
        ?>
        <!--fin otras noticias-->
    </div><!--fin row-->
</div><!--fin contenedor-->