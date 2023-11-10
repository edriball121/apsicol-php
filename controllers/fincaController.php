<?php

class   fincaController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

        // -------------------------------------------------------------------------------------------------------------------------------

    public function index()
    {
        //Creamos el objeto usuario
        $finca_obj = new finca();

        //Conseguimos todos los usuarios
        $allfinca = $finca_obj->getAll();

        $current_view = "finca/indexView.php";

        require_once 'views/layouts/'.$this->layout;
    }
    
    //--------------------------------------------------------------------------------------------------
    
    
    public function indexFinca() {
        //Creamos el objeto usuario
        $finca_obj = new finca();

        //Conseguimos todos los usuarios
        $allfinca = $finca_obj->getAll();

        $current_view = "GranjeroViews/ListaFinca.php";

        require_once 'views/layouts/' . $this->layout_gran;
    }
    
    
    
    //------------------------------------------------------------------------------------------------------------------
    
    
    public function DetallesFinca() {
        $Doc = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto usuario
        $finca_obj = new finca($Doc);

        //Conseguimos todos los usuarios
        $onefinca = $finca_obj->getItem();
        $current_view = "GranjeroViews/DetallesFinca.php";

        require_once 'views/layouts/' . $this->layout_gran;
    }

        // -------------------------------------------------------------------------------------------------------------------------------

   public function crear(){
        $current_view = "finca/agregarView.php";

        require_once 'views/layouts/'.$this->layout;
    }

        // -------------------------------------------------------------------------------------------------------------------------------

    public function ver(){
        $Doc = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto usuario
        $finca_obj = new finca($Doc);

        //Conseguimos todos los usuarios
        $onefinca = $finca_obj->getItem();
        $current_view = "finca/detallesView.php";

        require_once 'views/layouts/'.$this->layout;
    }
        // -------------------------------------------------------------------------------------------------------------------------------

    public function borrar(){

        $Doc = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto usuario
        $finca_obj = new finca($Doc);


        //Conseguimos todos los usuarios
        $onefinca = $finca_obj->delete();
        header("Location:index.php?controller=Fincas&action=index");
    }



    // -------------------------------------------------------------------------------------------------------------------------------
    public function editView(){
        $Doc = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto usuario
        $finca_obj = new finca($Doc);

        //Conseguimos todos los usuarios

        $onefinca = $finca_obj->getItem();
        $current_view = "finca/editarView.php";
       

        require_once 'views/layouts/'.$this->layout;
    }

        // -------------------------------------------------------------------------------------------------------------------------------
    public function create()
    {
        if (isset($_POST["txtFin_nombre"])) {
            $Fin_nombre = isset($_POST['txtFin_nombre']) ? $_POST['txtFin_nombre'] :"";
            $Fin_codigo = isset($_POST['txtFin_codigo']) ? $_POST['txtFin_codigo'] :"";
            $Fin_tamanno = isset($_POST['txtFin_tamanno']) ? $_POST['txtFin_tamanno'] :"";
            $Fin_direccion  = isset($_POST['txtFin_direccion']) ? $_POST['txtFin_direccion'] :"";
            $Fin_foto  = isset($_POST['txtFin_foto']) ? $_POST['txtFin_foto'] :"";
            $Fin_productos  = isset($_POST['txtFin_productos']) ? $_POST['txtFin_productos'] :"";
            $Fin_Telefono  = isset($_POST['txtFin_telefono']) ? $_POST['txtFin_telefono'] :"";
            $Fin_Descripcion  = isset($_POST['txtFin_Descripcion']) ? $_POST['txtFin_Descripcion'] :"";
            // Crear Objeto finca con los datos del formulario
            $finca_obj = new finca($Fin_codigo, $Fin_nombre, $Fin_tamanno, $Fin_direccion, $Fin_foto, $Fin_productos, $Fin_Telefono, $Fin_Descripcion);

            // Se llama al metodo que inserta en la base de datos.
            // Se envía por parámetro el objeto de la clase finca
            $finca_obj->save();

        }
        header("Location:index.php?controller=Fincas&action=index");
    }
        // -------------------------------------------------------------------------------------------------------------------------------

    public function update()
    {
        if (isset($_POST["txtFin_codigos"])) {
            $Fin_nombre = isset($_POST['txtFin_nombres']) ? $_POST['txtFin_nombres'] :"";
            $Fin_codigo = isset($_POST['txtFin_codigos']) ? $_POST['txtFin_codigos'] :"";
            $Fin_tamanno = isset($_POST['txtFin_tamannos']) ? $_POST['txtFin_tamannos'] :"";
            $Fin_direccion  = isset($_POST['txtFin_direccion']) ? $_POST['txtFin_direccion'] :"";
            $Fin_foto  = isset($_POST['txtFin_foto']) ? $_POST['txtFin_foto'] :"";
            $Fin_productos  = isset($_POST['txtFin_productos']) ? $_POST['txtFin_productos'] :"";
            $Fin_Telefono  = isset($_POST['txtFin_Telefono']) ? $_POST['txtFin_Telefono'] :"";
            $Fin_Descripcion  = isset($_POST['txtFin_Descripcion']) ? $_POST['txtFin_Descripcion'] :"";

            // Crear Objeto Paciente con los datos del formulario
            $finca_obj = new finca($Fin_codigo, $Fin_nombre, $Fin_tamanno, $Fin_direccion, $Fin_foto, $Fin_productos, $Fin_Telefono, $Fin_Descripcion);

            // Se llama al metodo que inserta en la base de datos.
            // Se envía por parámetro el objeto de la clase paciente
            $finca_obj->edit();
        }
        header("Location:index.php?controller=Fincas&action=index");
    }
 }
