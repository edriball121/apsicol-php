<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Empresa&action=index" ?>">Empresa</a></li>
            <li id="bread">Editar</li>
        </ul>
        <?php
        if (isset($oneEmpresa)) {
            ?>
            <div class="col-xs-12">

                <form id="formEditEmpresa" action = "<?php echo "index.php?controller=Empresa&action=update"; ?>" method="post">
                    <h4 class="text-center" id="bold">EDITAR EMPRESA</h4>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="txtEmp_codigo" name="txtEmp_codigo" placeholder="" value="<?php echo $oneEmpresa->emp_codigo; ?>">
                    </div>
                    <div class="form-group">
                        <label for="txtCon_nombre">Nombre: </label>
                        <input type="text" class="form-control" id="txtEmp_nombre" name="txtEmp_nombre" placeholder="" value="<?php echo $oneEmpresa->emp_nombre; ?>">
                    </div>
                    <div class="form-group">
                        <label for="txtCon_apellido">Descripcion: </label>
                        <textarea class="form-control" id="txtEmp_descripcion" name="txtEmp_descripcion" placeholder="" rows="6"><?php echo $oneEmpresa->emp_descripcion; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="txtCon_password">Telefono: </label>
                        <input type="tel" class="form-control" id="txtEmp_telefono" name="txtEmp_telefono" placeholder="" value="<?php echo $oneEmpresa->emp_telefono; ?>">
                    </div>
                    <div class="form-group">
                        <label for="txtCon_telefono">Foto: </label>
                        <input type="file"  accept="image/*"class="form-control" id="txtEmp_foto" name="txtEmp_foto" placeholder="" value="<?php echo $oneEmpresa->emp_foto ?>">
                    </div>
                    <div class="text-center">
                        <button type="submit"  class="btn btn-success">Actualizar</button>
                    </div>
                </form>
            <?php } ?>
        </div>
    </div>
    <br> 
</div>


