<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Empleo&action=index" ?>">Empleo</a></li>
            <li id="bread">Editar</li>
        </ul>
        <div class="col-xs-12">
            <?php
            if (isset($oneempleo)) {
                ?>
                <form id="formEditEmpleo" action = "<?php echo "index.php?controller=Empleo&action=update"; ?>" method="post">
                    <h4 class="text-center" id="bold">EDITAR EMPLEO</h4>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="txtEmp_codigo" name="txtEmp_codigo" placeholder="" value="<?php echo $oneempleo->Emp_codigo; ?>">
                    </div>
                    <div id="resultado"></div>
                    <div class="form-group">
                        <label for="txtEmp_Nombre">Nombre de la empresa: </label>
                        <input type="text" class="form-control" id="txtEmpl_Nombre" name="txtEmp_Nombre" placeholder="" value="<?php echo $oneempleo->Emp_Nombre; ?>">
                    </div>
                    <div class="form-group">
                        <label for="txtEmp_Descripcion">Descripcion: </label>
                        <textarea type="text" class="form-control" for="txtEmp_Descripcion" name="txtEmp_Descripcion" placeholder=""  rows="6"><?php echo $oneempleo->Emp_Descripcion; ?></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit"  class="btn btn-success">Actualizar</button>
                    </div>
                    <hr>
                </form>
                <?php
            }
            ?>
        </div>
    </div> <!-- row -->
</div>