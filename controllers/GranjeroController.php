<?php

class GranjeroController extends BaseController {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        //Creamos el objeto paciente
        $granjero_obj = new Granjero();

        //Conseguimos todos los pacientes
        $allGranjero = $granjero_obj->getAll();
        $current_view = "granjero/indexView.php";
        require_once 'views/layouts/' . $this->layout;

        //require_once 'views/granjero/indexView.php';
    }

    public function detailView() {

        $Doc = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto usuario
        $granjero_obj = new Granjero($Doc);

        //Conseguimos todos los usuarios
        $selectedGranjero = $granjero_obj->selectedItem();
        $current_view = "granjero/detailView.php";
        require_once 'views/layouts/' . $this->layout;

        //include_once('views/granjero/detailView.php');
    }

    public function editView() {
        $Doc = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto usuario
        $granjero_obj = new Granjero($Doc);

        //Conseguimos todos los usuarios
        $selectedGranjero = $granjero_obj->selectedItem();
        $current_view = "granjero/editView.php";
        require_once 'views/layouts/' . $this->layout;

        //require_once 'views/granjero/editView.php';
    }

    public function borrar() {
        $idGranjero = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto usuario
        $granjero_obj = new Granjero($idGranjero);


        //Conseguimos todos los usuarios
        $oneGranjero = $granjero_obj->delete();
        header("Location:index.php?controller=granjero&action=index");
    }

    public function crearGranjero() {
        $current_view = "granjero/createView.php";
        require_once 'views/layouts/' . $this->layout;

        //require_once 'views/granjero/createView.php';
    }

   

    public function create() {
        if (isset($_POST["txtGra_nombre"])) {
            $Gra_nombre = isset($_POST['txtGra_nombre']) ? $_POST['txtGra_nombre'] : "";
            $Gra_cedula = isset($_POST['txtGra_cedula']) ? $_POST['txtGra_cedula'] : "";
            $Gra_apellido = isset($_POST['txtGra_apellido']) ? $_POST['txtGra_apellido'] : "";
            $Gra_password = isset($_POST['txtGra_password']) ? $_POST['txtGra_password'] : "";
            $Gra_telefono = isset($_POST['txtGra_telefono']) ? $_POST['txtGra_telefono'] : "";
            $Gra_email = isset($_POST['txtGra_email']) ? $_POST['txtGra_email'] : "";
            $Gra_direccion = isset($_POST['txtGra_direccion']) ? $_POST['txtGra_direccion'] : "";
            $Gra_fecha_nacimiento = isset($_POST['txtGra_fecha_nacimiento']) ? $_POST['txtGra_fecha_nacimiento'] : "";
            $Gra_fecha_creacion = isset($_POST['txtGra_fecha_creacion']) ? $_POST['txtGra_fecha_creacion'] : "";
            $Gra_perfil_laboral = isset($_POST['txtGra_perfil_laboral']) ? $_POST['txtGra_perfil_laboral'] : "";

            // Crear Objeto granjero con los datos del formulario
            $granjero_obj = new Granjero($Gra_cedula, $Gra_nombre, $Gra_apellido, $Gra_password, $Gra_telefono, $Gra_email, $Gra_direccion, $Gra_fecha_nacimiento, $Gra_fecha_creacion, $Gra_perfil_laboral);

            // Se llama al metodo que inserta en la base de datos.
            // Se envía por parámetro el objeto de la clase paciente
            $granjero_obj->save();
        }
        header("Location:index.php?controller=granjero&action=index");
    }

    public function update() {
        if (isset($_POST["txtGra_cedula"])) {
            $Gra_nombre = isset($_POST['txtGra_nombre']) ? $_POST['txtGra_nombre'] : "";
            $Gra_cedula = isset($_POST['txtGra_cedula']) ? $_POST['txtGra_cedula'] : "";
            $Gra_apellido = isset($_POST['txtGra_apellido']) ? $_POST['txtGra_apellido'] : "";
            $Gra_password = isset($_POST['txtGra_password']) ? $_POST['txtGra_password'] : "";
            $Gra_telefono = isset($_POST['txtGra_telefono']) ? $_POST['txtGra_telefono'] : "";
            $Gra_email = isset($_POST['txtGra_email']) ? $_POST['txtGra_email'] : "";
            $Gra_direccion = isset($_POST['txtGra_direccion']) ? $_POST['txtGra_direccion'] : "";
            $Gra_fecha_nacimiento = isset($_POST['txtGra_fecha_nacimiento']) ? $_POST['txtGra_fecha_nacimiento'] : "";
            $Gra_fecha_creacion = isset($_POST['txtGra_fecha_creacion']) ? $_POST['txtGra_fecha_creacion'] : "";
            $Gra_perfil_laboral = isset($_POST['txtGra_perfil_laboral']) ? $_POST['txtGra_perfil_laboral'] : "";

            // Crear Objeto Paciente con los datos del formulario
            $granjero_obj = new Granjero($Gra_cedula, $Gra_nombre, $Gra_apellido, $Gra_password, $Gra_telefono, $Gra_email, $Gra_direccion, $Gra_fecha_nacimiento, $Gra_fecha_creacion, $Gra_perfil_laboral);

            // Se llama al metodo que inserta en la base de datos.
            // Se envía por parámetro el objeto de la clase paciente
            $granjero_obj->edit();
        }
        header("Location:index.php?controller=granjero&action=index");
    }

}
