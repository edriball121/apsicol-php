<?php
session_start();
class BaseController
{
    protected $layout;
    protected $layout_cons;
    protected $layout_gran;
    protected $layout_admi;
    
    
    public function __construct()
    {
        $this->layout = "admin_layout.php";
        $this->layout_cons ="Consultor_layout.php";
        $this->layout_gran ="Granjero_layout.php";
        $this->layout_admi ="Administrador_layout.php";  
        
        require_once 'Connection.php';
        require_once 'BaseModel.php';

        //Incluir todos los modelos
        require_once 'models/Consultor.class.php';
        require_once 'models/Consulta.class.php';
        require_once 'models/Empresa.class.php';
        require_once 'models/Servicios.class.php';
        require_once 'models/Empleo.class.php';
        require_once 'models/Agricola.class.php';
        require_once 'models/Pecuario.class.php';
        require_once 'models/finca.class.php';
        require_once 'models/granjero.class.php';
        require_once 'models/producto.class.php';
        require_once 'models/administrador.class.php';
        require_once 'models/canasta.class.php';
        require_once 'models/ciudad.class.php';
        require_once 'models/noticias.class.php';
        
        /*foreach (glob("models/*.php") as $file) {
            require_once $file;
        }*/
        
    }

    // Crear los Métodos que sean comunes para todos los controladores
}


