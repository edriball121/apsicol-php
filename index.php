<?php

//url inicio: http://localhost/apsicol/index.php?controller=inicio&action=index

//Configuración global
require_once 'config/Global.php';

//Base para los controladores
require_once 'core/BaseController.php';

//capturar la accion y el controlador que llegan por metodo get
$controller = isset($_GET['controller']) ? $_GET['controller'] : "";
$action = isset($_GET['action']) ? $_GET['action'] : "";

switch (ucwords($controller)) {
    case 'Consultor':
        $controlador = 'ConsultorController';
        break;
    
    case 'Consulta':
        $controlador = 'ConsultaController';
        break;

    case 'Inicio':
        $controlador = 'InicioController';
        break;

    case 'Empresa':
        $controlador = 'EmpresaController';
        break;

    case 'Servicios':
        $controlador = 'ServiciosController';
        break;

    case 'Granjero':
        $controlador = 'GranjeroController';
        break;

    case 'Empleo':
        $controlador = 'EmpleoController';
        break;

    case 'Agricola':
        $controlador = 'AgricolaController';
        break;

    case 'Pecuario':
        $controlador = 'PecuarioController';
        break;

    case 'Fincas':
        $controlador = 'fincaController';
        break;

    case 'Granjero':
        $controlador = 'GranjeroController';
        break;

    case 'Producto':
        $controlador = 'ProductoController';

        break;

    case 'Administrador':
        $controlador = 'AdministradorController';
        break;

    case 'Canasta':
        $controlador = 'CanastaController';

        break;

    case 'Ciudad':
        $controlador = 'CiudadController';

        break;

    case 'Noticias':
        $controlador = 'NoticiasController';

        break;
        
    case 'LoginAdmi':
        $controlador = 'LoginAdmiController';
        break;

    case 'LoginGran':
        $controlador = 'LoginGranController';
        break;
        
    case 'LoginCons':
        $controlador = 'LoginConsController';
        break;

    default:
        break;
}
$strFileController = 'controllers/' . $controlador . '.php';
// si el archivo existe, se crea un objeto de dicha clase

if (is_file($strFileController)) {

    //se incluye el archivo para ser instanciado
    require_once $strFileController;
    //se crea un objeto de la clase controladora
    $controllerObj = new $controlador();
    //si no llega la accion, se asigna la accion por defecto
    if ($action == "") {
        $action = ACCION_DEFECTO;
    }
    if (method_exists($controllerObj, $action)) {
        # Se llama al método requerido de la clase controladora
        $controllerObj->$action();
    } else {
        echo "No existe el metodo";
    }
}