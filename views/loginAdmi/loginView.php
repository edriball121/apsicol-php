<div id="prinAp" class="container-fluid" >
    <div>
        <br>
        <p> <?php echo(isset($message) && $erromessageres != "") ? $message : ""; ?></p>
    </div>
    <!-- <main class="col-xs-12" style="background-color: white"> -->
    <div class="col-xs-6 well" id="Iniciar1">
        <form id="formLoginAdmi" action = "index.php?controller=loginAdmi&action=initloginData" method="post" class="form-group">
            <h3>Login</h3>
            <hr/>
            <h4>Por favor ingrese datos de acceso</h4>

            <div class="form-group">
                <label for="txtCedula">Cedula * </label>
                <input type="text" class="form-control" id="txtCedula" name="txtCedula" placeholder="">
            </div>
            <div class="form-group">
                <label for="txtcontrasenna">Contraseña * </label>
                <input type="password" class="form-control" id="txtcontrasenna" name="txtcontrasenna"  placeholder="">
            </div>

            <h4 style="color:blue">Los campos con * son requeridos</h4>
            
            <div>

                <h1> <?php echo (isset($errores) && $errores != "") ? $errores : ""; ?> </h1>
            </div>
            <center><button type="submit" id="btnGuardar" class="btn btn-info">Iniciar Sesion</button></center><br> <br> 

        </form>
    </div>
    <div class="col-xs-6">
        <img src="img/LOGO proyecto.png" alt="" width="100%" height="600px"/>
    </div>
</div>



