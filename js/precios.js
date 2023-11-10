$(document).ready(function(){
$("#busca2").click(function(){
        var buscar="";
        buscar=$("#busca").val();
        if( buscar == "" ) {
               $("#busca").css("border","1px solid red");
			   alert("el campo es obligatorio");
           }
           else{
           		$("#busca").css("border","1px solid green");
           }
	});
});

$(document).ready(function(){
$("#buscar").click(function(){
        var buscar="";
        buscar=$("#ln_buscar").val();
        if( buscar == "" ) {
               
         alert("el campo Buscar esta en blanco ");
           }
  });
});