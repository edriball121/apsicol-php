<div id="prinAp" class="container-fluid">
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="<?php echo "index.php?controller=Canasta&action=index" ?>">Precios</a></li>
            <li id="bread">Listar</li>
        </ul>
        <div class= "col-xs-12">
            <h2 class="text-center">Precios Canasta Familiar</h2>

            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar..." title="Type in a name">

            <table id="myTable" class="col-xs-12">
                <tr class="col-xs-12">
                        <th class="col-xs-6">Nombre</th>
                        <th class="col-xs-6">Precio</th>
                        <th class="col-xs-6">Ciudad</th>
                    </tr>
                    <?php
                    if (isset($allCanasta)) { //viene de la clase canasta controller
                        foreach ($allCanasta as $row) { //recorremos el array de objetos y obtenemos el valor de las propiedades
                            ?>
                    <tr class="col-xs-12">
                                <td class="col-xs-6"><?php echo $row->cta_nombre; ?></td>
                                <td class="col-xs-6"><?php echo $row->cta_precio; ?></td>
                                <td class="col-xs-6"><?php echo $row->cta_ciudad; ?></td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
            </table>

            <script>
                function myFunction() {
                    var input, filter, table, tr, td, i;
                    input = document.getElementById("myInput");
                    filter = input.value.toUpperCase();
                    table = document.getElementById("myTable");
                    tr = table.getElementsByTagName("tr");
                    for (i = 0; i < tr.length; i++) {
                        td = tr[i].getElementsByTagName("td")[0];
                        if (td) {
                            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                                tr[i].style.display = "";
                            } else {
                                tr[i].style.display = "none";
                            }
                        }
                    }
                }
            </script>
        </div>
    </div>
</div>