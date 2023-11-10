<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Fincas&action=index" ?>">Fincas</a></li>
            <li id="bread">Editar</li>
        </ul>
        <h4 class="text-center" id="bold">EDITAR FINCA</h4>

        <div class="col-xs-12">
            <?php
            if (isset($onefinca)) {
                ?>
                <form id="formCreateFinca" action = "<?php echo "index.php?controller=Fincas&action=update"; ?>" method="post">
                    <hr/>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="txtFin_codigo" name="txtFin_codigo" placeholder=""value="<?php echo $onefinca->Fin_codigo; ?>">
                    </div>
                    <div class="form-group">
                        <label for="txtFin_nombre">Nombre: </label>
                        <input type="text" class="form-control" id="txtFin_nombre" name="txtFin_nombre" placeholder="" value="<?php echo $onefinca->Fin_nombre; ?>">
                    </div>
                    <div class="form-group">
                        <label for="txtFin_tamanno">Tamaño: </label>
                        <input type="number" class="form-control" id="txtFin_tamanno" name="txtFin_tamanno" placeholder=""value="<?php echo $onefinca->Fin_tamanno; ?>">
                    </div>
                    <div class="form-group">
                        <label for="txtFin_direccion">Direccion: </label>
                        <input type="text" class="form-control" id="txtFin_direccion" name="txtFin_direccion" placeholder="" value="<?php echo $onefinca->Fin_direccion; ?>">
                    </div>
                    <div class="form-group">
                        <label for="txtFin_foto">foto: </label>
                        <input type="text" class="form-control" id="txtFin_foto" name="txtFin_foto" placeholder="" value="<?php echo $onefinca->Fin_foto; ?>">
                    </div>
                    <div class="form-group">
                        <label for="txtFin_productos">productos: </label>
                        <input type="text" class="form-control" id="txtFin_productos" name="txtFin_productos" placeholder="" value="<?php echo $onefinca->Fin_productos; ?>">
                    </div>
                    <div class="form-group">
                        <label for="txtFin_Telefono">Telefono: </label>
                        <input type="text" class="form-control" id="txtFin_Telefono" name="txtFin_Telefono" placeholder="" value="<?php echo $onefinca->Fin_Telefono; ?>">
                    </div>
                    <div class="form-group">
                        <label for="txtFin_Descripcion">Descripcion: </label>
                        <textarea class="form-control" id="txtFin_Descripcion" name="txtFin_Descripcion" placeholder="" rows="6"><?php echo $onefinca->Fin_Descripcion; ?></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit"  class="btn btn-success">Guardar</button>
                    </div>
                </form>
                <?php
            } else {
                echo "El granjero no existe";
            }
            ?>
        </div>
    </div>
    <br>
</div>
