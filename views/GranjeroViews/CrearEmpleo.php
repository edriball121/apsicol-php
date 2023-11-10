<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Empleo&action=index" ?>">Empleo</a></li>
            <li id="bread">Crear</li>
        </ul>

        <div class="col-xs-12">
            <h2 class="text-center" id="bold">CREAR EMPLEO</h2>
            <br>

            <form action="<?php echo "index.php?controller=Empleo&action=create"; ?>" method="post">
                <div class="form-group">
                    <label for="txtEmpl_Nombre ">Nombre de la Granja: </label>
                    <input type="text" class="form-control" id="txtEmpl_Nombre" name="txtEmpl_Nombre" placeholder="Nombre de la empresa">
                </div>
                <div class="form-group">
                    <label for="txtEmp_Descripcion">Descripcion: </label>
                    <textarea type="text" class="form-control" for="txtEmp_Descripcion" name="txtEmp_Descripcion" placeholder="Requerimientos"  rows="10" cols="180"></textarea>
                </div>
                <input type="checkbox" name="condiciones" /><label for="condiciones">Aceptar terminos y <a href="condiciones.php">condiciones.</a></label>
                <div class="text-center"><button type="submit" class="btn btn-info">Guardar</button></div>
                <br>
            </form>
        </div>
    </div> <!-- row -->
</div>
