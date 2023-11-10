$(document).ready(function(){
$("#buscar").click(function(){
        var buscar="";
        buscar=$("#ln_buscar").val();
        if( buscar == "" ) {
               
			   alert("el campo Buscar esta en blanco ");
           }
	});
});