/* 
 * Validaciones formularios
 */
function validarCampos(inputs) {
    var isArray = Array.isArray(inputs);
    var todo_correcto = true;

    if (isArray) { // Validacion cuando llega un array
        for (var i = 0; i < inputs.length; i++) {
            var input = $("#" + inputs[i]).val();
            if (input.length === 0) {
                $("#" + inputs[i]).css("border", "1px solid red");
                todo_correcto = false;
            } else {
                $("#" + inputs[i]).css("border", "1px solid #81F7F3");
            }
        }
    } else { // Validación cuando llega un solo campo
        var input = $("#" + inputs).val();
        //console.log($(input).html());
        if (input.length === 0) {
            $("#" + inputs).css("border", "1px solid red");
            todo_correcto = false;
        }
    }
    return todo_correcto;
}

$(document).ready(function () {
    $("#btnGuardar").click(function (evt) {
        evt.preventDefault(); // Bloquear el submit del formulario

        var form = $(this).parents('form'); // Capturamos el FORM papá del boton
        var formName = form.attr("id");

        if (formName == "formCreateAdmin") { // Crear Administrador
            var arrayCampos = ['txtAdm_cedula', 'txtAdm_nombre', 'txtAdm_apellido', 'txtAdm_telefono', 'txtAdm_email', 'txtAdm_direccion', 'txtAdm_password', 'txtAdm_fecha_nacimiento', 'txtAdm_rol'];
        } else if (formName == "formCreateAgricola") { // Crear Agricola
            var arrayCampos = ['txtApe_nombre', 'txtApe_tipo', 'txtApe_Foto', 'txtApe_Descripcion'];
        } else if (formName == "formCreateCanasta") { // Crear Canasta
            var arrayCampos = ['txtCta_nombre', 'txtCta_precio', 'txtCta_fecha', 'txtCta_ciudad'];
        } else if (formName == "formCreateCiudad") { // Crear Ciudad
            var arrayCampos = ['txtCiu_nombre', 'txtCiu_estado'];
        } else if (formName == "formCreateConsultor") { // Crear Consultor
            var arrayCampos = ['txtCon_cedula', 'txtCon_nombre', 'txtCon_apellido', 'txtCon_password', 'txtCon_telefono', 'txtCon_email', 'txtCon_direccion', 'txtCon_fecha_nacimiento', 'txtCon_profesion', 'txtCon_annos_experiencia'];
        } else if (formName == "formCreateEmpleo") { // Crear Empleo
            var arrayCampos = ['txtEmpl_Nombre', 'txtEmp_Descripcion'];
        } else if (formName == "formCreateEmpresa") { // Crear Empresa
            var arrayCampos = ['txtEmp_nombre', 'txtEmp_descripcion', 'txtEmp_telefono'];
        } else if (formName == "formCreateFinca") { // Crear Finca
            var arrayCampos = ['txtFin_nombre', 'txtFin_tamanno', 'txtFin_direccion', 'txtFin_telefono', 'txtFin_foto', 'txtFin_productos', 'txtFin_Descripcion'];
        } else if (formName == "formCreateGranjero") { // Crear Granjero
            var arrayCampos = ['txtGra_cedula', 'txtGra_nombre', 'txtGra_apellido', 'txtGra_password', 'txtGra_telefono', 'txtGra_email', 'txtGra_direccion', 'txtGra_fecha_nacimiento', 'txtGra_perfil_laboral'];
        } else if (formName == "formLoginAdmi") { // Crear Login Administrador
            var arrayCampos = ['txtCedula', 'txtcontrasenna'];
        } else if (formName == "formLoginGran") { // Crear Login Granjero
            var arrayCampos = ['txtCedula', 'txtcontrasenna'];
        } else if (formName == "formCreateNoticias") { // Crear Noticias
            var arrayCampos = ['txtNot_nombre', 'txtNot_descripcion', 'txtNot_foto', 'txtNot_fecha_creacion', 'txtNot_url'];
        } else if (formName == "formCreatePecuario") { // Crear pecuario
            var arrayCampos = ['txtApe_nombre', 'txtApe_tipo', 'txtApe_Foto', 'txtApe_Descripcion'];
        } else if (formName == "formCreateProducto") { // Crear Producto
            var arrayCampos = ['txtPro_nombre', 'txtPro_descripcion', 'txtPro_precio', 'txtPro_estado', 'txtPro_cantidad', 'txtPro_terminos'];
        } else if (formName == "formCreateServicios") { // Crear Servicios
            var arrayCampos = ['txtSer_nombre', 'txtSer_descripcion', 'txtSer_valor', 'txtSer_foto', 'txtFK_ser_emp_codigo'];
        } else if (formName == "createConsultor") { // Crear consultor inicio
            var arrayCampos = ['txtCon_cedula', 'txtCon_nombre', 'txtCon_apellido', 'txtCon_password', 'txtCon_telefono', 'txtCon_email', 'txtCon_direccion', 'txtCon_fecha_nacimiento', 'txtCon_profesion', 'txtCon_annos_experiencia'];
        } else if (formName == "formCreateGran") { // Crear granjero inicio
            var arrayCampos = ['txtGra_cedula', 'txtGra_nombre', 'txtGra_apellido', 'txtGra_password', 'txtGra_telefono', 'txtGra_email', 'txtGra_direccion', 'txtGra_fecha_nacimiento', 'txtCon_profesion', 'txtGra_perfil_lab'];
        } else if (formName == "formLoginCons") { // Crear Login consultor inicio
            var arrayCampos = ['txtCedula', 'txtcontrasenna'];
        } else if (formName == "formLoginGran") { // Crear Login granjero inicio
            var arrayCampos = ['txtCedula', 'txtcontrasenna'];
        } else if (formName == "formCrearProducto") { // Crear Login granjero inicio
            var arrayCampos = ['txtPro_nombre', 'txtPro_descripcion', 'txtPro_precio', 'txtPro_estado', 'txtPro_cantidad'];
        }


        var todo_correcto = validarCampos(arrayCampos);
        if (!todo_correcto) {
            alert('Los campos deben estar completos');
        } else {
            form.submit(); // Enviar el formulario
        }
        /*var cedula = $("#txtAdm_cedula").val();
         if (cedula.length === 0) {
         $("#txtAdm_cedula").css("border", "1px solid red");
         todo_correcto = false;
         }*/
    }); // Fin evento btnGuardar

    /*
     * Login Consultor y granjero
     */
    $(".btnLogin").click(function (evt) {
        //previene el envio del formulario de forma automatica pro ser un SUBMIT
        evt.preventDefault();
        var idBtn = $(this).attr("id");
        if (idBtn == "btnLoginConsultor") {
        //login consultor
            var CedulaTxt = $("#txt_con_cedula").val();
            var contrasennaTxt = $("#txt_con_password").val();
            
            var arrayCampos = ['txt_con_cedula', 'txt_con_password'];
            
            var todo_correcto = validarCampos(arrayCampos);
            
            if (!todo_correcto) {
                alert('Los campos deben estar completos');
            } else {
                //Llamado AJAX con la funcion $.post
                $.post(
                        "index.php?controller=LoginCons&action=validarLoginAjax", //URL que se llamara 
                        {//Dtos/Variables que seran enviados por POST 
                            txtCedula: CedulaTxt,
                            txtcontrasenna: contrasennaTxt
                        },
                        function (obj) {
                            var estado = obj.estado;
                            var mensaje = obj.mensaje;
                            if (estado == "1") {
                                location.href = "index.php?controller=inicio&action=indexConsultor";
                            } else {
                                alert(mensaje);
                            }
                        },
                        "json" //Tipo de dato esperado en la respuesta del servidor
                        );
//fin login consultor

            }
        } else { // Login granjero
            var CedulaTxt = $("#txt_gra_cedula").val();
            var contrasennaTxt = $("#txt_gra_password").val();

            var arrayCampos = ['txt_gra_cedula', 'txt_gra_password'];
            var todo_correcto = validarCampos(arrayCampos);
            if (!todo_correcto) {
                alert('Los campos deben estar completos');
            } else {
                $.post(
                        "index.php?controller=LoginGran&action=validarLoginAjax", //URL que se llamara 
                        {//Dtos/Variables que seran enviados pro POST 
                            txtCedula: CedulaTxt,
                            txtcontrasenna: contrasennaTxt
                        },
                        function (obj) {
                            var estado = obj.estado;
                            var mensaje = obj.mensaje;

                            if (estado == "1") {
                                location.href = "index.php?controller=inicio&action=indexGranjero";
                            } else {
                                alert(mensaje);
                            }
                        },
                        "json" //Tipo de dato esperado en la respuesta del servidor
                        );
            }
        }
    });

    // FIN Login consultor y granjero
    
}); // Fin document ready

// FIN Validaciones formularios

