$('#btn_loginCon').click(function () {
//    variables de consultor inicio sesion
    var CedulaIniCon = $("#txtCedula").val();
    var contrasennaIniCon = $("#txtcontrasenna").val();

//    validar cedula consultor
    if (CedulaIniCon.length === 0) {
        $("#txtCedula").css("border", "2px solid red");

    } else {
        $("#txtCedula").css("border", "2px solid green");
    }
//    validar password consultor
    if (contrasennaIniCon.length === 0) {
        $("#txtcontrasenna").css("border", "2px solid red");

    } else {
        $("#txtcontrasenna").css("border", "2px solid green");
    }

});


$('#btn_loginGran').click(function () {//    validar aqui inicio sesion de Granjero
});

$('#btn_loginAdm').click(function () {//    validar aqui inicio sesion de Administrador
});

//    validar aqui creacion de granjero
$('#crearConsultor').click(function () {
//    variables de consultor crear
    var CedulaCon = $("#txtCon_cedula").val();
    var nombreCon = $("#txtCon_nombre").val();
    var apellidoCon = $("#txtCon_apellido").val();
    var passwordCon = $("#txtCon_password").val();
    var telefonoCon = $("#txtCon_telefono").val();
    var emailCon = $("#txtCon_email").val();
    var direccionCon = $("#txtCon_direccion").val();
    var fecha_nacCon = $("#txtCon_fecha_nacimiento").val();
    var profesionCon = $("#txtCon_profesion").val();
    var annos_experienciaCon = $("#txtCon_annos_experiencia").val();


//    validar cedula consultor
    if (CedulaCon.length === 0) {
        $("#txtCon_cedula").css("border", "2px solid red");

    } else {
        $("#txtCon_cedula").css("border", "2px solid green");
    }
    
//    validar nombre consultor
    if (nombreCon.length === 0) {
        $("#txtCon_nombre").css("border", "2px solid red");

    } else {
        $("#txtCon_nombre").css("border", "2px solid green");
    }
    
//    validar apellido consultor
    if (apellidoCon.length === 0) {
        $("#txtCon_apellido").css("border", "2px solid red");

    } else {
        $("#txtCon_apellido").css("border", "2px solid green");
    }
   
//    validar contraseña consultor
    if (passwordCon.length === 0) {
        $("#txtCon_password").css("border", "2px solid red");

    } else {
        $("#txtCon_password").css("border", "2px solid green");
    }
    
//    validar telefono consultor
    if (telefonoCon.length === 0) {
        $("#txtCon_telefono").css("border", "2px solid red");

    } else {
        $("#txtCon_telefono").css("border", "2px solid green");
    }
    
//    validar email consultor
    if (emailCon.length === 0) {
        $("#txtCon_email").css("border", "2px solid red");

    } else {
        $("#txtCon_email").css("border", "2px solid green");
    }
    
//    validar direccion consultor
    if (direccionCon.length === 0) {
        $("#txtCon_direccion").css("border", "2px solid red");

    } else {
        $("#txtCon_direccion").css("border", "2px solid green");
    }

//    validar fecha nacimiento consultor
    if (fecha_nacCon.length === 0) {
        $("#txtCon_fecha_nacimiento").css("border", "2px solid red");

    } else {
        $("#txtCon_fecha_nacimiento").css("border", "2px solid green");
    }
    
//    validar profesion consultor
    if (profesionCon.length === 0) {
        $("#txtCon_profesion").css("border", "2px solid red");

    } else {
        $("#txtCon_profesion").css("border", "2px solid green");
    }
    
//    validar años experiencia consultor
    if (annos_experienciaCon.length === 0) {
        $("#txtCon_annos_experiencia").css("border", "2px solid red");

    } else {
        $("#txtCon_annos_experiencia").css("border", "2px solid green");
    }    
    
});
