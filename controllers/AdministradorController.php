<?php

class AdministradorController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        //Creamos el objeto administrador
        $administrador_obj = new Administrador();

        //Conseguimos todos los pacientes
        $allAdministrador = $administrador_obj->getAll();

        $current_view = "administrador/indexView.php";
        require_once 'views/layouts/'.$this->layout;

       // require_once 'views/administrador/indexView.php';
    }
    public function selectedAdm(){
        
    }
    
    public function detailView()
    {
        
        $Doc = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto usuario
        $administrador_obj = new Administrador($Doc);

        //Conseguimos todos los usuarios
        $selectedAdministrador = $administrador_obj->selectedItem();
        $current_view = "administrador/detailView.php";
        require_once 'views/layouts/'.$this->layout;

       //include_once('views/administrador/detailView.php');
    }

    public function editView()
    {
        $Doc = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto usuario
        $administrador_obj = new Administrador($Doc);

        //Conseguimos todos los usuarios
        $selectedAdministrador = $administrador_obj->selectedItem();
        $current_view = "administrador/editView.php";
        require_once 'views/layouts/'.$this->layout;
        
        //require_once 'views/administrador/editView.php';
    }

    public function borrar(){
        $idAdministrador = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto usuario
        $administrador_obj = new Administrador($idAdministrador);
        //Conseguimos todos los usuarios
        $oneAdministrador = $administrador_obj->delete();
        header("Location:index.php?controller=administrador&action=index");
    }

    public function crearAdministrador(){
        $current_view = "administrador/createView.php";
        require_once 'views/layouts/'.$this->layout;
        // require_once 'views/administrador/createView.php';
    }

    

    public function create()
    {
        if (isset($_POST["txtAdm_nombre"])) {
            $Adm_nombre = isset($_POST['txtAdm_nombre']) ? $_POST['txtAdm_nombre'] :"";
            $Adm_cedula = isset($_POST['txtAdm_cedula']) ? $_POST['txtAdm_cedula'] :"";
            $Adm_apellido = isset($_POST['txtAdm_apellido']) ? $_POST['txtAdm_apellido'] :"";
            $Adm_password  = isset($_POST['txtAdm_password']) ? $_POST['txtAdm_password'] :"";
            $Adm_telefono  = isset($_POST['txtAdm_telefono']) ? $_POST['txtAdm_telefono'] :"";
            $Adm_email  = isset($_POST['txtAdm_email']) ? $_POST['txtAdm_email'] :"";
            $Adm_direccion  = isset($_POST['txtAdm_direccion']) ? $_POST['txtAdm_direccion'] :"";
            $Adm_fecha_nacimiento  = isset($_POST['txtAdm_fecha_nacimiento']) ? $_POST['txtAdm_fecha_nacimiento'] :"";
            $Adm_fecha_creacion = isset($_POST['txtAdm_fecha_creacion']) ? $_POST['txtAdm_fecha_creacion'] :"";
            $Adm_rol  = isset($_POST['txtAdm_rol']) ? $_POST['txtAdm_rol'] :"";

            // Crear Objeto granjero con los datos del formulario
            $administrador_obj = new Administrador($Adm_cedula, $Adm_nombre, $Adm_apellido, $Adm_password, $Adm_telefono, $Adm_email, $Adm_direccion, $Adm_fecha_nacimiento, $Adm_fecha_creacion,$Adm_rol);

            // Se llama al metodo que inserta en la base de datos.
            // Se envía por parámetro el objeto de la clase paciente
            $administrador_obj->save();
            
        }
        header("Location:index.php?controller=administrador&action=index");
    }

    public function update()
    {
        if (isset($_POST["txtAdm_cedula"])) {
            $Adm_nombre = isset($_POST['txtAdm_nombre']) ? $_POST['txtAdm_nombre'] :"";
            $Adm_cedula = isset($_POST['txtAdm_cedula']) ? $_POST['txtAdm_cedula'] :"";
            $Adm_apellido = isset($_POST['txtAdm_apellido']) ? $_POST['txtAdm_apellido'] :"";
            $Adm_password  = isset($_POST['txtAdm_password']) ? $_POST['txtAdm_password'] :"";
            $Adm_telefono  = isset($_POST['txtAdm_telefono']) ? $_POST['txtAdm_telefono'] :"";
            $Adm_email  = isset($_POST['txtAdm_email']) ? $_POST['txtAdm_email'] :"";
            $Adm_direccion  = isset($_POST['txtAdm_direccion']) ? $_POST['txtAdm_direccion'] :"";
            $Adm_fecha_nacimiento  = isset($_POST['txtAdm_fecha_nacimiento']) ? $_POST['txtAdm_fecha_nacimiento'] :"";
            $Adm_fecha_creacion = isset($_POST['txtAdm_fecha_creacion']) ? $_POST['txtAdm_fecha_creacion'] :"";
            $Adm_rol  = isset($_POST['txtAdm_rol']) ? $_POST['txtAdm_rol'] :"";
            
            // Crear Objeto Paciente con los datos del formulario
            $administrador_obj = new Administrador($Adm_cedula, $Adm_nombre, $Adm_apellido, $Adm_password, $Adm_telefono, $Adm_email, $Adm_direccion, $Adm_fecha_nacimiento, $Adm_fecha_creacion,$Adm_rol);

            // Se llama al metodo que inserta en la base de datos.
            // Se envía por parámetro el objeto de la clase paciente
            $administrador_obj->edit();
            
        }
        header("Location:index.php?controller=administrador&action=index");
    }
}

