<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Empleo&action=index" ?>">Agricola</a></li>
            <li id="bread">Listar</li>
        </ul>
        <h2 class="text-center" id="bold">LISTA DE EMPLEOS</h2>
        <hr>
        <div class="col-xs-12">
            <?php
            if (isset($allempleo)) {
                foreach ($allempleo as $row) { //recorremos el array de objetos y obtenemos el valor de las propiedades
                    ?>
                    <a href = "<?php echo " index.php?controller=Empleo&action=DetallesEmpleo&id=" . $row->Emp_codigo; ?>">
                        <div  class="container" style="background-color: white; border-radius: 5px;">
                            <div class="col-xs-2">
                                <img src="img/empleo.jpg" alt="img temp" width="100%" height="150px;"/>
                            </div>
                            <div class="col-xs-10">
                                <h2><?php echo $row->Emp_Nombre; ?> </h2>
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
