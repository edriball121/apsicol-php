<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8"><!--codificacion para caracteres especiales-->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!--visualizacion en escala para usar el responsive-->
        <link rel="shortcut icon" href="img/logo.ico"/><!--icono de la pagina web pestaña superior-->
        <!-- librerias de Bootstrap CSS terceros-->
        <link rel="stylesheet" href="css/bootstrap.min.css"  type="text/css"/>
        <!-- librerias de Bootstrap CSS propias-->
        <link rel="stylesheet" href="css/mycss.css">
        <!--iconos-->
        <link href="css/icomoon/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
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
                    <a class="navbar-brand" href="#"><img src="img/LOGO proyecto.png"  width="50px" height="40px" id="img-logo"/></a>
                    <a class="navbar-brand" href="index.php?controller=inicio&action=index"><p id="bold"><span class="glyphicon glyphicon-piggy-bank"></span> APSICOL</p></a>
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
                        <!--inicio modal registrar-->
                        <!-- Trigger the modal with a button -->
                        <li><a href="" data-toggle="modal" data-target="#modal-registrar"><span class="glyphicon glyphicon-user"></span> Registrar</a></li>
                        <li><a href="" data-toggle="modal" data-target="#modal-iniciar"><span class="glyphicon glyphicon-log-in"></span> Iniciar</a></li>

                        <!-- Modal Registrar-->
                        <div class="modal fade" id="modal-registrar" role="dialog">
                            <div class="modal-dialog modal-lg" >
                                <div class="modal-content" id="modal">
                                    <div class="modal-body">
                                        <!--contenido modal registrar-->
                                        <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="collapse" data-target="#Con_crear">Crear Consultor</button>
                                        <div id="Con_crear" class="collapse">
                                            <hr>
                                            <form id="createConsultor" action="<?php echo "index.php?controller=Consultor&action=create"; ?>" method="POST" class="black-text">
                                                <label id="bold">Cedula</label><input type="number" name="txtCon_cedula" id="txtCon_cedula" class="required form-control"><br>
                                                <label id="bold">Nombre</label><input type="text" name="txtCon_nombre" id="txtCon_nombre" class="required form-control"><br>
                                                <label id="bold">Apellido</label><input type="text" name="txtCon_apellido" id="txtCon_apellido" class="required form-control"><br>
                                                <label id="bold">Contraseña</label><input type="password" name="txtCon_password" id="txtCon_password" class="required form-control"><br>
                                                <label id="bold">Telefono</label><input type="number" name="txtCon_telefono" id="txtCon_telefono" class="required form-control"><br>
                                                <label id="bold">Email</label><input type="email" name="txtCon_email" id="txtCon_email" class="required form-control"><br>
                                                <label id="bold">Direccion</label><input type="text" name="txtCon_direccion" id="txtCon_direccion" class="required form-control"><br>
                                                <label id="bold">Fecha Nacimiento</label><input type="date" name="txtCon_fecha_nacimiento" id="txtCon_fecha_nacimiento" class="required form-control"><br>
                                                <label id="bold">Profesion</label><input type="text" name="txtCon_profesion" id="txtCon_profesion" class="required form-control"><br>
                                                <label id="bold">Años Experiencia</b><input type="number" name="txtCon_annos_experiencia" id="txtCon_annos_experiencia" class="required form-control"><br>
                                                    <button type="submit" id="btnGuardar" class="btn btn-primary" id="crearConsultor">Crear</button>
                                                    <button type="reset" class="btn btn-danger">Borrar datos</button> 
                                            </form>
                                        </div>

                                        <br>
                                        <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="collapse" data-target="#Gra_crear">Crear Granjero</button>
                                        <div id="Gra_crear" class="collapse">
                                            <hr>
                                            <form id="formCreateGran" action="<?php echo "index.php?controller=granjero&action=create"; ?>" method="POST" class="black-text">
                                                <label id="bold">Cedula</label><input type="number" name="txtGra_cedula" id="txtGra_cedula" class="required form-control"><br>
                                                <label id="bold">Nombre</label><input type="text" name="txtGra_nombre" id="txtGra_nombre" class="required form-control"><br>
                                                <label id="bold">Apellido</label><input type="text" name="txtGra_apellido" id="txtGra_apellido" class="required form-control"><br>
                                                <label id="bold">Contraseña</label><input type="password" name="txtGra_password" id="txtGra_password" class="required form-control"><br>
                                                <label id="bold">Telefono</label><input type="number" name="txtGra_telefono" id="txtGra_telefono" class="required form-control"><br>
                                                <label id="bold">Email</label><input type="email" name="txtGra_email" id="txtGra_email" class="required form-control"><br>
                                                <label id="bold">Direccion</label><input type="text" name="txtGra_direccion" id="txtGra_direccion" class="required form-control"><br>
                                                <label id="bold">Fecha Nacimiento</label><input type="date" name="txtGra_fecha_nacimiento" id="txtGra_fecha_nacimiento" class="required form-control"><br>
                                                <label id="bold">Perfil laboral</label><input type="text" name="txtGra_perfil_lab" id="txtGra_perfil_lab" class="required form-control"><br>
                                                <button type="submit" id="btnGuardar" class="btn btn-primary">Crear</button>
                                                <button type="reset" class="btn btn-danger">Borrar datos</button> 

                                            </form>
                                        </div>
                                        <!--fin contenido modal registrar-->
                                        <hr>
                                        <p align="center">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>  
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--fin modal registrar-->

                        <!-- Modal Iniciar-->
                        <div class="modal fade" id="modal-iniciar" role="dialog">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body" id="modal">
                                        <center><button type="button" class="btn btn-success btn-lg btn-block" data-toggle="collapse" data-target="#Con_ini">Consultor</button></center>                              
                                        <div id="Con_ini" class="collapse">
                                            <form id="formLoginCons" action="" method="POST" >
                                                <label>Cedula</label><input type="text" name="txt_con_cedula" id="txt_con_cedula" class="required form-control"><br>
                                                <label>Contraseña</label><input type="password" name="txt_con_password" id="txt_con_password" class="required form-control"><br>
                                                <button type="submit" id="btnLoginConsultor" class="btn btn-primary btnLogin">Ingresar</button>
                                                <button type="reset" class="btn btn-danger">Borrar datos</button> 
                                            </form>
                                        </div>
                                        <br>
                                        <center><button type="button" class="btn btn-success btn-lg btn-block" data-toggle="collapse" data-target="#Gra_ini">Granjero</button></center>                              
                                        <div id="Gra_ini" class="collapse">
                                            <p> <?php echo(isset($message) && $erromessageres != "") ? $message : ""; ?></p>
                                            <form id="formLoginGran" action="" method="POST" >
                                                <label>Cedula</label><input type="text"  name="txt_gra_cedula" id="txt_gra_cedula" class="required form-control"><br>
                                                <label>Contraseña</label><input type="password" name="txt_gra_password"  id="txt_gra_password" class="required form-control"><br>
                                                <h1> <?php echo (isset($errores) && $errores != "") ? $errores : ""; ?> </h1>
                                                <button type="submit"  id="btnLoginGranjero" class="btn btn-primary btnLogin">Ingresar</button>
                                                <button type="reset"  class="btn btn-danger">Borrar datos</button> 
                                            </form>
                                        </div>
                                        <!--fin contenido modal registrar-->
                                        <hr>
                                        <p align="center">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>  
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>                
                        <!--fin modal inciar-->
                    </ul>
                </div>
            </div>
        </nav><!--fin nav-->

        <?php
        require_once 'views/' . $current_view;
        ?>
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
    </body>
</html>


