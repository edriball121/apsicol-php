
<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Empleo&action=index" ?>">Empleo</a></li>
            <li id="bread">Crear</li>
        </ul>
        <div class="col-xs-12">
            <form action="<?php echo "index.php?controller=Empleo&action=create"; ?>" method="post">
                <center><h1><b>CREAR EMPLEO</b></h1></center>
                <hr />
                
                <div class="form-group">
                    <label for="txtEmpl_Nombre ">Nombre del empleo: </label>
                    <input type="text" class="form-control" id="txtEmpl_Nombre" name="txtEmpl_Nombre" placeholder="Nombre de la empresa">
                </div>
                <div class="form-group">
                    <label for="txtEmp_Descripcion">Descripcion: </label>
                    <textarea type="text" class="form-control" for="txtEmp_Descripcion" name="txtEmp_Descripcion" placeholder="Requerimientos"  rows="6"></textarea>
                </div>
                <center><button type="submit" class="btn btn-success">Guardar</button></center>
            </form>
        </div>
    </div> <!-- row -->
    <br>
</div>
