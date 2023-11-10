<?php

class EmpleoController extends BaseController {

    public function __construct() {
        parent::__construct();
    }

    // -------------------------------------------------------------------------------------------------------------------------------

    public function indexEmpleo() {
        //Creamos el objeto usuario
        $empleo_obj = new Empleo();

        //Conseguimos todos los usuarios
        $allempleo = $empleo_obj->getAll();

        $current_view = "GranjeroViews/ListaEmpleo.php";

        require_once 'views/layouts/' . $this->layout_gran;
    }

    public function CrearEmpleo() {
        $current_view = "GranjeroViews/CrearEmpleo.php";

        require_once 'views/layouts/' . $this->layout_gran;
    }

    public function DetallesEmpleo() {
        $Doc = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto usuario
        $empleo_obj = new Empleo($Doc);

        //Conseguimos todos los usuarios
        $oneempleo = $empleo_obj->getItem();
        $current_view = "GranjeroViews/DetallesEmpleo.php";

        require_once 'views/layouts/' . $this->layout_gran;
    }

    public function index() {
        //Creamos el objeto usuario
        $empleo_obj = new Empleo();

        //Conseguimos todos los usuarios
        $allempleo = $empleo_obj->getAll();

        $current_view = "empleo/indexView.php";

        require_once 'views/layouts/' . $this->layout;
    }

    // -------------------------------------------------------------------------------------------------------------------------------

    public function crear() {
        $current_view = "empleo/agregarView.php";

        require_once 'views/layouts/' . $this->layout;
    }

    // -------------------------------------------------------------------------------------------------------------------------------


    public function ver() {
        $Doc = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto usuario
        $empleo_obj = new Empleo($Doc);

        //Conseguimos todos los usuarios
        $oneempleo = $empleo_obj->getItem();
        $current_view = "empleo/detallesView.php";

        require_once 'views/layouts/' . $this->layout;
    }

    // -------------------------------------------------------------------------------------------------------------------------------

    public function borrar() {

        $Doc = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto usuario
        $empleo_obj = new Empleo($Doc);


        //Conseguimos todos los usuarios
        $oneEmpleo = $empleo_obj->delete();
        header("Location:index.php?controller=Empleo&action=index");
    }

    // -------------------------------------------------------------------------------------------------------------------------------
    public function editView() {
        $Doc = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto usuario
        $empleo_obj = new Empleo($Doc);

        //Conseguimos todos los usuarios

        $oneempleo = $empleo_obj->getItem();
        $current_view = "empleo/editarView.php";

        require_once 'views/layouts/' . $this->layout;
    }

    // -------------------------------------------------------------------------------------------------------------------------------
    public function create() {
        if (isset($_POST["txtEmpl_Nombre"])) {
            $Emp_Nombre = isset($_POST['txtEmpl_Nombre']) ? $_POST['txtEmpl_Nombre'] : "";
            $Emp_codigo = isset($_POST['txtEmp_codigo']) ? $_POST['txtEmp_codigo'] : "";
            $Emp_Termnos_y_condiciones = isset($_POST['txtEmp_Termnos_y_condiciones']) ? $_POST['txtEmp_Termnos_y_condiciones'] : "";
            $Emp_fecha_creacion = isset($_POST['txtEmp_fecha_creacion']) ? $_POST['txtEmp_fecha_creacion'] : "";
            $Emp_Descripcion = isset($_POST['txtEmp_Descripcion']) ? $_POST['txtEmp_Descripcion'] : "";

            // Crear Objeto empleo con los datos del formulario
            $empleo_obj = new Empleo($Emp_codigo, $Emp_Nombre, $Emp_Termnos_y_condiciones, $Emp_fecha_creacion, $Emp_Descripcion);

            // Se llama al metodo que inserta en la base de datos.
            // Se envía por parámetro el objeto de la clase Empleo
            $empleo_obj->save();
        }
        header("Location:index.php?controller=Empleo&action=indexEmpleo");
    }

    // -------------------------------------------------------------------------------------------------------------------------------

    public function update() {
        if (isset($_POST["txtEmp_codigo"])) {
            $Emp_Nombre = isset($_POST['txtEmp_Nombre']) ? $_POST['txtEmp_Nombre'] : "";
            $Emp_codigo = isset($_POST['txtEmp_codigo']) ? $_POST['txtEmp_codigo'] : "";
            $Emp_Termnos_y_condiciones = isset($_POST['txtEmp_Termnos_y_condiciones']) ? $_POST['txtEmp_Termnos_y_condiciones'] : "";
            $Emp_fecha_creacion = isset($_POST['txtEmp_fecha_creacion']) ? $_POST['txtEmp_fecha_creacion'] : "";
            $Emp_Descripcion = isset($_POST['txtEmp_Descripcion']) ? $_POST['txtEmp_Descripcion'] : "";

            // Crear Objeto Paciente con los datos del formulario
            $empleo_obj = new Empleo($Emp_codigo, $Emp_Nombre, $Emp_Termnos_y_condiciones, $Emp_fecha_creacion, $Emp_Descripcion);
            // Se llama al metodo que inserta en la base de datos.
            // Se envía por parámetro el objeto de la clase Empleo
            $empleo_obj->edit();
        }
        header("Location:index.php?controller=Empleo&action=index");
    }

}
