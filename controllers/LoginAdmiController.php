<?php

class LoginAdmiController extends BaseController {

    public function __construct() {
        parent::__construct();
        $this->layout = "login_layout.php";
       /* parent::__construct();
        $current_view = 'loginAdmi/loginView.php';
        require_once 'views/layouts/' . $this->layout;*/ //esto crea conflicto para las validaciones y el ingreso de datos

    }
    
    public function initlogin(){
        $current_view ='loginAdmi/loginView.php';
        require_once 'views/layouts/'.$this->layout;
    }
    

    public function initloginData(){
        $current_view ='loginAdmi/loginView.php';
        if (isset($_POST["txtCedula"]) && $_POST["txtcontrasenna"]) {
            $txtCedula = isset($_POST["txtCedula"])? trim ($_POST["txtCedula"]) : "";
            $contrasenna = isset($_POST["txtcontrasenna"])? trim ($_POST["txtcontrasenna"]) : "";
            $errores = "";
            
            if ($txtCedula == '' || $contrasenna == '') {
                $errores = "El usuario o contraseña son incorrectos ";
                require_once 'views/layouts/' .$this->layout;
            }
            else{
                //creamos un administrador
                $administrador = new Administrador();
                $administrador ->setAdm_cedula($txtCedula);
                $administrador->setAdm_password($contrasenna);
                
                if ($administrador->validarLogin()) {
                    header("Location:index.php?controller=inicio&action=indexAdministrador");
                }else {
                   $errores = "El usuario o contraseña son incorrectos";
                    require_once 'views/layouts/'.$this->layout;
                }
            }
        }else{
            header("Location:index.php?controller=loginAdmi&action=initlogin");
        }
    }

    public function logout(){

        //destruir todas las sesiones activas
        session_destroy();
        header("Location:index.php?controller=inicio&action=index");
    }
     
    public function error ($code = 0){
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
        header("Location:index.php?controller=loginAdmi&action=initlogin");
    }

}
    

