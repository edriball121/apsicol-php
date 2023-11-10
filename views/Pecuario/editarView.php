<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Pecuario&action=index" ?>">Pecuario</a></li>
            <li id="bread">Editar</li>
        </ul>
        <div class="col-xs-12">
            <?php
            if (isset($onepecuario)) {
                ?>
                <form id="formEditPecuario" action = "<?php echo "index.php?controller=Pecuario&action=update"; ?>" method="post">
                    <h4 class="text-center" id="bold">EDITAR PECUARIO</h4>
                    <hr>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="txtApe_codigo" name="txtApe_codigo" placeholder="" value="<?php echo $onepecuario->Ape_codigo; ?>">
                    </div>
                    <div class="form-group">
                        <label for="txtApe_nombre">Nombre del producto: </label>
                        <input type="text" class="form-control" id="txtApe_nombre" name="txtApe_nombre" placeholder="" value="<?php echo $onepecuario->Ape_nombre; ?>">
                    </div>
                    <div class="form-group">
                        <label for="txtApe_tipo">Tipo de producto: </label>
                        <input type="text" class="form-control" id="txtApe_tipo" name="txtApe_tipo" placeholder="" value="<?php echo $onepecuario->Ape_tipo; ?>">
                    </div>
                    <div class="form-group">
                        <label for="txtApe_Foto ">Foto del producto: </label>
                        <input type="text" class="form-control" id="txtApe_Foto" name="txtApe_Foto" placeholder="" value="<?php echo $onepecuario->Ape_Foto; ?>">
                    </div>
                    <div class="form-group">
                        <label for="txtApe_Descripcion">Descripcion del producto: </label>
                        <textarea class="form-control" id="txtApe_Descripcion" name="txtApe_Descripcion" placeholder="" rows="6"><?php echo $onepecuario->Ape_Descripcion; ?></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit"  class="btn btn-success">Actualizar</button>
                    </div>
                </form>
                <?php
            } else {
                echo "El empleo no existe";
            }
            ?>
        </div>
    </div> <!-- row -->
    <br>
</div>
