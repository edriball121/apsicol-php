$("#iniciar").click(function (){
    var nombre=$("#usuario").val();
    
    if(nombre.length===0){
        $("#usuario").css("border", "2px solid red");
        
    }
    else{
        $("#usuario").css("border", "2px solid green");

        
    }
});


$("#iniciar").click(function (){
    var nombre=$("#contraseña").val();
    
    if(nombre.length===0){
        $("#contraseña").css("border", "2px solid red");
        
        
    }
    else{
        $("#contraseña").css("border", "2px solid green");
        
        
    }
});

$(document).ready(function(){
    $("#iniciar").click (function(){

        $("#forminicio_sesion").validate({
            submitHandler:function(form){
                form.submit();
            }
        });
    });
});
            
    