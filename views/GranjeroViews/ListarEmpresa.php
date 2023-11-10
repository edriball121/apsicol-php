<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Empresa&action=indexEmpresa" ?>">Empresa</a></li>
            <li id="bread">Listar</li>
        </ul>
        <h2 class="text-center" id="bold">LISTA DE EMPRESAS</h2>
        <hr>
        <div class="col-xs-12">
            <?php
            if (isset($allEmpresas)) {
                foreach ($allEmpresas as $row) { //recorremos el array de objetos y obtenemos el valor de las propiedades 
                    ?>
                    <a href="<?php echo "index.php?controller=Empresa&action=EmpresaDetalle&id=" . $row->emp_codigo; ?>">
                            <div  class="container" style="background-color: white; border-radius: 5px;">
                                <div class="col-xs-2">
                                    <img src="uploads/imgEmpresas/<?php echo $row->emp_foto; ?>" alt="imagen Empresa" width="100%" height="200px;"/>
                                </div>
                                <div class="col-xs-10">
                                    <h2><?php echo $row->emp_nombre; ?> </h2>
                                    <h4><?php echo $row->emp_subtitulo; ?> </h4>
                                </div>
                            </div>
                    </a>
                    <hr>
                    <?php
                }
            }
            ?>
        </div>  
    </div> 
</div>


