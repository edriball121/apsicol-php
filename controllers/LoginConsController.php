<?php

class LoginConsController extends BaseController {

    public function __construct() {
        parent::__construct();
    }

    public function validarLoginAjax() {
        $estado = 0;
        $mensaje = "";

        if (isset($_POST["txtCedula"]) && $_POST["txtcontrasenna"]) {
            $txtCedula = isset($_POST["txtCedula"]) ? trim($_POST["txtCedula"]) : "";
            $txtcontrasenna = isset($_POST["txtcontrasenna"]) ? trim($_POST["txtcontrasenna"]) : "";

            if ($txtCedula == '' || $txtcontrasenna == '') {
                $mensaje = "El usuario o contraseña son incorrectos ";
            } else {
                //creamos un consultor
                $consultor = new Consultor();
                $consultor->setCon_cedula($txtCedula);
                $consultor->setCon_password($txtcontrasenna);

                if ($consultor->validarLogin()) {
                    $estado = 1;
                } else {
                    $mensaje = "El usuario o contraseña son incorrectos";
                }
            }
        } else {
            $mensaje = "El usuario o contraseña son obligatorios";
        }

        echo '{
            "estado": "' . $estado . '", 
            "mensaje": "' . $mensaje . '"
        }';
    }

    public function logout() {

        //destruir todas las sesiones activas
        session_destroy();
        header("Location:index.php?controller=inicio&action=index");
    }

    public function error($code = 0) {
        $codeMessage = (isset($_GET['msg']) ? $_GET['msg'] : $code);
        $message = "";
        switch ($codeMessage) {
            case 1:
                $message = "No está autorizado para realizar esta accion";
                break;
            case 2:
                $message = "La acción que intenta cargar no existe";
                break;

            default:
                $message = "Error desconocido";
                break;
        }
        header("Location:index.php?controller=Login&action=initlogin");
    }

}
