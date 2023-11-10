<?php

class ConsultorController extends BaseController {

    public function __construct() {
        parent::__construct();
    }

    //usado para llamar al formulario principal de listar Consultor
    public function index() {
        //Creamos el objeto Consultor
        $consultor_obj = new Consultor();

        //Conseguimos todos los consultores
        $allConsultores = $consultor_obj->getAll();
        //incluye la vista de consultor listar index
        $current_view = 'consultor/indexView.php';
        require_once 'views/layouts/' . $this->layout;
    }

    //llama al formulario agregar consultor
    public function Crear() {
        //incluye la vista de agregar consultor
        $current_view = 'consultor/AgregarConsultorView.php';
        require_once 'views/layouts/' . $this->layout;
    }

    //llama al formulario de editar
    public function editar() {
        //trae el ID del consultor
        $Doc = isset($_GET['id']) ? $_GET['id'] : "";

        //Creamos el objeto consultor
        $consultor_obj = new Consultor($Doc);

        //Conseguimos todos los consultores
        $oneConsultor = $consultor_obj->getItem();
        //incluye la vista de editar consultor
        $current_view = 'consultor/EditarConsultorView.php';
        require_once 'views/layouts/' . $this->layout;
    }

    //llama al formulario de detalles de consultor
    public function detalle() {
        //trae el ID del consultor
        $Doc = isset($_GET['id']) ? $_GET['id'] : "";

        //Creamos el objeto consultor
        $consultor_obj = new Consultor($Doc);

        //Conseguimos todos los consultores
        $oneConsultor = $consultor_obj->getItem();
        //incluye la vista de detalles consultor
        $current_view = 'consultor/DetalleConsultorView.php';
        require_once 'views/layouts/' . $this->layout;
    }

    public function borrar() {
        $Doc = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto consultor
        $consultor_obj = new Consultor($Doc);


        //Conseguimos a el consultor
        $deleteConsultor = $consultor_obj->delete();
        if ($deleteConsultor == 1451) { // Problemas con llave foranea
            header("Location:index.php?controller=Consultor&action=index");
            //header("Location:index.php?controller=Consultor&action=index&error=1");
        } else {
            //header("Location:index.php?controller=Consultor&action=index");
        }
    }

    //llama al metodo de crear paciente
    public function create() {
        //valida que exista al menos el nombre del paciente
        if (isset($_POST["txtCon_nombre"])) {
            $con_cedula = isset($_POST['txtCon_cedula']) ? $_POST['txtCon_cedula'] : "";
            $con_nombre = isset($_POST['txtCon_nombre']) ? $_POST['txtCon_nombre'] : "";
            $con_apellido = isset($_POST['txtCon_apellido']) ? $_POST['txtCon_apellido'] : "";
            $con_password = isset($_POST['txtCon_password']) ? $_POST['txtCon_password'] : "";
            $con_telefono = isset($_POST['txtCon_telefono']) ? $_POST['txtCon_telefono'] : "";
            $con_email = isset($_POST['txtCon_email']) ? $_POST['txtCon_email'] : "";
            $con_direccion = isset($_POST['txtCon_direccion']) ? $_POST['txtCon_direccion'] : "";
            $con_fecha_nacimiento = isset($_POST['txtCon_fecha_nacimiento']) ? $_POST['txtCon_fecha_nacimiento'] : "";
            $con_profesion = isset($_POST['txtCon_profesion']) ? $_POST['txtCon_profesion'] : "";
            $con_annos_experiencia = isset($_POST['txtCon_annos_experiencia']) ? $_POST['txtCon_annos_experiencia'] : "";

            // Crear Objeto Paciente con los datos del formulario
            $consultor_obj = new Consultor($con_cedula, $con_nombre, $con_apellido, $con_password, $con_telefono, $con_email, $con_direccion, $con_fecha_nacimiento, $con_profesion, $con_annos_experiencia);
            // Se llama al metodo que inserta en la base de datos.
            // Se envía por parámetro el objeto de la clase paciente
            $crearConsultor = $consultor_obj->save();
            echo "<br>error code".$crearConsultor;
            if ($crearConsultor === 1062) { // Problemas con llave foranea
                header("Location:index.php?controller=inicio&action=index&error=1");
            } else {
                header("Location:index.php?controller=inicio&action=index");
                
            }
        }
        //header("Location:index.php?controller=Consultor&action=index");
    }

    public function update() {

        if (isset($_POST["txtCon_cedula"])) {
            $con_cedula = isset($_POST['txtCon_cedula']) ? $_POST['txtCon_cedula'] : "";
            $con_nombre = isset($_POST['txtCon_nombre']) ? $_POST['txtCon_nombre'] : "";
            $con_apellido = isset($_POST['txtCon_apellido']) ? $_POST['txtCon_apellido'] : "";
            $con_password = isset($_POST['txtCon_password']) ? $_POST['txtCon_password'] : "";
            $con_telefono = isset($_POST['txtCon_telefono']) ? $_POST['txtCon_telefono'] : "";
            $con_email = isset($_POST['txtCon_email']) ? $_POST['txtCon_email'] : "";
            $con_direccion = isset($_POST['txtCon_direccion']) ? $_POST['txtCon_direccion'] : "";
            $con_fecha_nacimiento = isset($_POST['txtCon_fecha_nacimiento']) ? $_POST['txtCon_fecha_nacimiento'] : "";
            $con_profesion = isset($_POST['txtCon_profesion']) ? $_POST['txtCon_profesion'] : "";
            $con_annos_experiencia = isset($_POST['txtCon_annos_experiencia']) ? $_POST['txtCon_annos_experiencia'] : "";

            // Crear Objeto Paciente con los datos del formulario
            $consultor_obj = new Consultor($con_cedula, $con_nombre, $con_apellido, $con_password, $con_telefono, $con_email, $con_direccion, $con_fecha_nacimiento, $con_profesion, $con_annos_experiencia);
            // Se llama al metodo que inserta en la base de datos.
            // Se envía por parámetro el objeto de la clase paciente
            $consultor_obj->edit();
        }
        header("Location:index.php?controller=Consultor&action=index");
    }

}
