/*$("#Registro").click(function (){


	Nombre=$("#Nombre").val();
	if (Nombre=="") {
		$("#Nombre").css("border","2px solid red");

	}else {
		$("#Nombre").css("border","2px solid green");
	}



	Apellido=$("#Apellido").val();
	if (Apellido=="") {
		$("#Apellido").css("border","2px solid red");

	}else {
		$("#Apellido").css("border","2px solid green");
	}


	Email=$("#Email").val();
	if (Email=="") {
		$("#Email").css("border","2px solid red");

	}else {
		$("#Email").css("border","2px solid green");
	}


	Confirmar=$("#Confirmar").val();
	if (Confirmar=="") {
		$("#Confirmar").css("border","2px solid red");

	}else {
		$("#Confirmar").css("border","2px solid green");
	}


	ConfirmarContraseña=$("#ConfirmarContraseña").val();
	if (ConfirmarContraseña=="") {
		$("#ConfirmarContraseña").css("border","2px solid red");

	}else {
		$("#ConfirmarContraseña").css("border","2px solid green");
	}


    Contraseña=$("#Contraseña").val();
	if (Contraseña=="") {
		$("#Contraseña").css("border","2px solid red");

	}else {
		$("#Contraseña").css("border","2px solid green");
	}



    Usuario=$("#Usuario").val();
	if (Usuario=="") {
		$("#Usuario").css("border","2px solid red");

	}else {
		$("#Usuario").css("border","2px solid green");
	}

    Cedula=$("#Cedula").val();
	if (Cedula=="") {
		$("#Cedula").css("border","2px solid red");

	}else {
		$("#Cedula").css("border","2px solid green");
	}

	Celular=$("#Celular").val();
	if (Celular=="") {
		$("#Celular").css("border","2px solid red");

	}else {
		$("#Celular").css("border","2px solid green");
	}

	Dia=$("#Dia").val();
	if (Dia=="") {
		$("#Dia").css("border","2px solid red");

	}else {
		$("#Dia").css("border","2px solid green");
	}

	Mes=$("#Mes").val();
	if (Mes=="") {
		$("#Mes").css("border","2px solid red");

	}else {
		$("#Mes").css("border","2px solid green");
	}

	Año=$("#Año").val();
	if (Celular=="") {
		$("#Año").css("border","2px solid red");

	}else {
		$("#Año").css("border","2px solid green");
	}

	}); */

	$(document).ready(function(){
    $("#Registro").click (function(){

        $("#formRegistro").validate({
            submitHandler:function(form){
                form.submit();
            }
        });
    });
});
     