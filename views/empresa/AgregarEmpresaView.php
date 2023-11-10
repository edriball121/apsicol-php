<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Empresa&action=index" ?>">Empresa</a></li>
            <li id="bread">Crear</li>
        </ul>

        <div class="col-xs-12">
            <form id="formCreateEmpresa" action = "<?php echo "index.php?controller=Empresa&action=create"; ?>" method="post" enctype="multipart/form-data">
                <h4 class="text-center" id="bold">CREAR EMPRESA</h4>  
                <div class="form-group">
                    <label for="txtEmp_nombre">Nombre: </label>
                    <input type="text" class="form-control" id="txtEmp_nombre" name="txtEmp_nombre" placeholder="">
                </div>
                <div class="form-group">
                    <label for="txtEmp_descripcion">Descripcion: </label>
                    <textarea class="form-control" id="txtEmp_descripcion" name="txtEmp_descripcion" placeholder="" rows="6"></textarea>
                </div>
                <div class="form-group">
                    <label for="txtEmp_telefono">telefono: </label>
                    <input type="tel" class="form-control" id="txtEmp_telefono" name="txtEmp_telefono" placeholder="">
                </div>
                <div class="form-group">
                    <label for="txtEmp_foto">Foto: </label>
                    <input type="file" id="txtEmp_foto" name="txtEmp_foto">
                </div>
                <div class="text-center">
                    <button id="btnGuardar" type="submit"  class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>
    </div>
    <br>
</div>
