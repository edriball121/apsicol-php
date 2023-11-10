<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8"><!--codificacion para caracteres especiales-->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!--visualizacion en escala para usar el responsive-->
        <link rel="shortcut icon" href="img/logo.ico"/><!--icono de la pagina web pestaña superior-->
        <!-- librerias de Bootstrap CSS terceros-->
        <link rel="stylesheet" href="css/bootstrap.min.css"  type="text/css"/>
        <!--css encargado del menu lateral-->
        <link href="css/jside-menu.css" rel="stylesheet" type="text/css"/>
        <!--Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Hind|Oxygen" rel="stylesheet" />
        <!--jQuery-->
        <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
        <!--Material Design Iconic Font-->
        <link rel="stylesheet" href="material-design/css/material-design-iconic-font.css" />

        <!--jSide Menu Plugin-->
        <script src="js/jquery.jside.menu.js"></script>
        <!--jSide Menu CSS-->
        <link rel="stylesheet" href="css/jside-menu.css" />
        <!--jSide Skins-->
        <link rel="stylesheet" href="css/jside-skins.css" />
        <!-- librerias de Bootstrap CSS propias-->
        <link rel="stylesheet" href="css/mycss.css">
        <!--iconos-->
        <link href="css/icomoon/style.css" rel="stylesheet" type="text/css"/>

        <style>
            * {
                box-sizing: border-box;
            }

            #myInput {
                background-image: url('/css/searchicon.png');
                background-position: 10px 10px;
                background-repeat: no-repeat;
                width: 100%;
                font-size: 16px;
                padding: 12px 20px 12px 40px;
                border: 1px solid #ddd;
                margin-bottom: 12px;
            }

            #myTable {
                border-collapse: collapse;
                width: 100%;
                border: 1px solid #ddd;
                font-size: 18px;
            }

            #myTable th, #myTable td {
                text-align: left;
                padding: 12px;
            }

            #myTable tr {
                border-bottom: 1px solid #ddd;
            }

            #myTable tr.header, #myTable tr:hover {
                background-color: #f1f1f1;
            }
        </style>

    </head>
    <body>
        <!--inicio preloader-->
        <style>
            *,*:after, *:before{
                margin: 0;
                padding:0;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }

            #contenedor_carga{
                background-color: rgba(229,246,239, 1);
                margin-top: -23px;
                height: 100%;
                width: 100%;
                position: fixed;
                -webkit-transition: all 1s ease;
                -o-transition: all 1s ease;
                transition: all 1s ease;
                z-index: 10000;
            }

            #carga{
                border-top-color: red;
                border-top-style: double;
                height: 150px;
                width: 150px;
                border-radius: 100%;  

                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                margin: auto;

                -webkit-animation: girar 1.5s linear infinite;
                -o-animation: girar 1.5s linear infinite;
                animation: girar 1.5s linear infinite;
            }

            @keyframes girar{
                from{ transform: rotate(0deg); }
                to{ transform: rotate(360deg); }
            }
        </style>
        <div id="contenedor_carga">
            <div id="carga">

            </div>
        </div>

        <script>
            window.onload = function () {
                var contenedor = document.getElementById('contenedor_carga');

                contenedor.style.visibility = 'hidden';
                contenedor.style.opacity = '0';
            }
        </script>
        <!--fin preloader-->

        <!--inicio social-->
        <div class="social">
            <ul>
                <li><a href="http://www.facebook.com" target="_blank" class="icon-facebook"></a></li>
                <li><a href="http://www.twitter.com" target="_blank" class="icon-twitter"></a></li>
                <li><a href="http://www.googleplus.com" target="_blank" class="icon-google-plus"></a></li>
                <li><a href="http://www.pinterest.com" target="_blank" class="icon-pinterest2"></a></li>
                <li><a href="mailto:edriball@gmail.com" target="_blank" class="icon-mail2"></a></li>
            </ul>
        </div>
        <!--fin social-->

        <!--inicio navbar-->
        <nav class="navbar navbar-inverse" id="navbar-admin">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#"></a>
                    <a class="navbar-brand" href="#"></a>
                    <a class="navbar-brand" href="#"></a>
                    <a class="navbar-brand" href="index.php?controller=inicio&action=indexGranjero"><p id="bold"><span class="glyphicon glyphicon-piggy-bank"></span> APSICOL</p></a>
                </div>

                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-wrench"></span> Ajustes</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Cuenta</a></li>
                                <li><a href="#">Notificaciones</a></li>
                                <li><a href="#">Favoritos</a></li>
                                <li><a href="#">Ayuda</a></li>
                            </ul>
                        </li>
                        <form class="navbar-form navbar-left" action="#">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Buscar" name="buscar">
                                <div class="input-group-btn">
                                    <button class="btn-link btn-lg" type="submit">
                                        <spam class="glyphicon glyphicon-search"></spam>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php?controller=LoginGran&action=logout" class="btn-lg"><span class="glyphicon glyphicon-off"></span> Cerrar Sesión</a></li>
                        <li class="hidden-sm"><a class="icon-mail2 btn-lg" href="#" data-toggle="modal" data-target="#consulta">
                                Crear Consulta </a>
                        </li>
                    </ul>
                </div>

            </div>
            <button class="menu-trigger"> </button>
        </nav><!--fin nav-->
        <?php
        require_once 'views/' . $current_view;
        ?>

        <!--Inicio menu lateral-->
        <div class="menu-head">
            <span class="layer">
                <div class="col">
                    <div class="row for-pic">
                        <div class="profile-pic">     
                            <img src="img/user.png" alt="Foto Granjero"/>
                        </div>
                    </div>
                    <div class="row for-name">
                        <h3 title="User Name"> 
                            <?php
                            if (isset($_SESSION['nombre'])) {
                                echo $_SESSION['nombre'];
                            } else {
                                echo "Granjero";
                            }
                            ?>
                        </h3>
                        <span class="tagline">
                            <?php
                            if (isset($_SESSION['email'])) {
                                echo $_SESSION['email'];
                            } else {
                                echo "granjero@mail.com";
                            }
                            ?>
                        </span>
                    </div>
                </div> <!--//col-->
            </span>
        </div> <!--//menu-head-->

        <nav class="menu-container">

            <ul class="menu-items">
                <li><a class="icon-leaf btn-lg" href="<?php echo "index.php?controller=Agricola&action=indexAgricola" ?>">
                        Agricola </a>
                </li> 

                <li><a class="icon-bug btn-lg" href="<?php echo "index.php?controller=Pecuario&action=indexPecuario" ?>">
                        Pecuario </a>
                </li>

                <li><a class="icon-stats-dots btn-lg" href="<?php echo "index.php?controller=Canasta&action=indexCanasta" ?>">
                        Precios </a>
                </li>

                <li><a class="icon-briefcase btn-lg" href="<?php echo "index.php?controller=Empleo&action=indexEmpleo" ?>">
                        Consultar Empleo </a>
                </li>

                <li><a class="icon-briefcase btn-lg" href="<?php echo "index.php?controller=Empleo&action=CrearEmpleo" ?>">
                        Crear Empleo </a>
                </li>

                <li><a class="icon-office btn-lg" href="<?php echo "index.php?controller=Empresa&action=indexEmpresa" ?>">
                        Empresas </a>
                </li>

                <li><a class="icon-newspaper btn-lg" href="<?php echo "index.php?controller=Noticias&action=indexNoticias" ?>">
                        Noticias </a>
                </li>

                <li><a class="icon-coin-dollar btn-lg" href="<?php echo "index.php?controller=Producto&action=indexProducto" ?>">
                        Compra </a>
                </li>

                <li><a class="icon-coin-dollar btn-lg" href="<?php echo "index.php?controller=Producto&action=CrearProductoGran" ?>">
                        Venta </a>
                </li>

                <li><a class="icon-home btn-lg" href="<?php echo "index.php?controller=Fincas&action=indexFinca" ?>">
                        Finca </a>
                </li>

                <li><a class="icon-mail2 btn-lg" href="#" data-toggle="modal" data-target="#consulta">
                        Crear Consulta </a>
                </li>

            </ul>
        </nav>
        <!--Fin menu lateral-->

        <!--inicio modal consulta-->
        <div class="modal fade" id="consulta" role="dialog">
            <div class="modal-dialog" >
                <!-- Modal contenudo-->
                <div class="modal-content" id="modal">
                    <form action="index.php?controller=Consulta&action=crear" method="POST">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h2 class="modal-title text-center" id="bold" style="color: white;">Enviar mensaje</h2>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="txtcon_nombre">Nombre de la consulta: </label>
                                <input type="text" class="form-control" id="txtCon_nombre" name="txtCon_nombre" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="txtcon_nombre">Descripcion: </label>
                                <input type="" class="form-control" id="txt_con_descripcion" name="txt_con_descripcion" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="txtFK_con_gra_cedula">Cedula: </label>
                                <input type="text" class="form-control" id="txtFK_con_gra_cedula" name="txtFK_con_gra_cedula" placeholder="">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-info" data-toggle="modal" data-target="#respuestaConsulta">Enviar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <!--fin modal consulta-->


        <!--inicio modal consulta-->
        <div class="modal fade" id="respuestaConsulta" role="dialog">
            <div class="modal-dialog">
                <!-- Modal contenudo-->
                <div class="modal-content" id="modal">
                    <h1 class="text-center" style="color: white;" id="bold">Su consulta se ha generado con exito, un consultor te respondera en breve...</h1>
                    <img src="img/gracias.png" alt="Gracias" width="100%" height="300px"/>
                    <div class="text-center">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    </div>
                    <br>
                    </form>
                </div>

            </div>
        </div>

        <!--fin modal consulta-->


        <script>
            //menu lateral
            $(document).ready(function () {

                $(".menu-container").jSideMenu({
                    jSidePosition: "position-left", //possible options position-left or position-right

                    jSideSticky: true, // menubar will be fixed on top, false to set static

                    jSideSkin: "default-skin", // to apply custom skin, just put its name in this string
                });
            });
        </script>
        <footer id="legal" class="container-fluid"><!--inicio footer-->
            <h5 align="center" id="white-footer">Elaborated by:</h5>
            <p align="center" id="white-footer">Edwin Rivera Ballesteros, Juan Diego Quintero, Johanna Quintero Rodríguez</p>
        </footer><!--fin footer-->

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.validate.min.js"></script>
        <script type="text/javascript" src="js/localization/messages_es.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!-- Optional JavaScript -->
        <script src="js/index.js" type="text/javascript"></script>
        <script src="js/validaciones.jquery.js" type="text/javascript"></script>
        <script src="js/principal.js" type="text/javascript"></script>

        <!--js de menu lateral-->
        <script src="js/jquery.jside.menu.js" type="text/javascript"></script>
        <link rel="stylesheet" href="docs/demo-only.css" />
        <script src="docs/demo-only.js"></script>
    </body>
</html>





