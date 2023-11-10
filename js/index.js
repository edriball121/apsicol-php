$(document).ready(function () {
    $("#buscar").click(function () {
        var buscar = "";
        buscar = $("#ln_buscar").val();
        if (buscar == "") {

            alert("el campo Buscar esta en blanco ");
        }
    });
});
//mostrar globo emergente con el nombre
$(document).ready(function () {
    $('[data-toggle="agricola"]').tooltip();
});

$(function () {
    var documento = "";
    var controller = "";
    $(".eliminar_btn").on("click", function () {
        documento = $(this).attr("itemEliminar");
        controller = $(this).attr("controladorActual");

    });

    $("#btn_eliminar_modal").on("click", function () {
        window.location.href = 'index.php?controller=' + controller + '&action=borrar&id=' + documento;
    });

});



/*$(function () {
    var documento = "";
    var controller = ""; 

 
    $(".eliminar_btn").click(function () {
        documento = $(this).attr("itemEliminar");
        controller = $(this).attr("itemController");
       
    });

    $("#btn_eliminar_modal").click(function () {
        window.location.href = 'index.php?controller=' + controller + '&action=deleteView&id=' + documento;
    });

});*/



