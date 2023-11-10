<?php

class   PecuarioController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

        // -------------------------------------------------------------------------------------------------------------------------------

    public function index()
    {
        //Creamos el objeto usuario
        $pecuario_obj = new Pecuario();

        //Conseguimos todos los usuarios
        $allpecuario = $pecuario_obj->getAll();

        $current_view = "pecuario/indexView.php";

        require_once 'views/layouts/'.$this->layout;
    }
     // -------------------------------------------------------------------------------------------------------------------------------
    
    public function indexPecuario() {
        //Creamos el objeto usuario
        $pecuario_obj = new Pecuario();

        //Conseguimos todos los usuarios
        $allpecuario = $pecuario_obj->getAll();

        $current_view = "GranjeroViews/ListaPecuario.php";

        require_once 'views/layouts/' . $this->layout_gran;
    }
    //-----------------------------------------------------------------------------------------------------------------------------------------------
     public function DetallesPecuario() {
        $Doc = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto usuario
        $pecuario_obj = new Pecuario($Doc);

        //Conseguimos todos los usuarios
        $onepecuario = $pecuario_obj->getItem();
        $current_view = "GranjeroViews/DetallesPecuario.php";

        require_once 'views/layouts/' . $this->layout_gran;
    }

        // -------------------------------------------------------------------------------------------------------------------------------

    public function crear(){
        $current_view = "pecuario/agregarView.php";

        require_once 'views/layouts/'.$this->layout;
    }

        // -------------------------------------------------------------------------------------------------------------------------------


    public function ver(){
        $Doc = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto usuario
        $pecuario_obj = new Pecuario($Doc);

        //Conseguimos todos los usuarios
        $onepecuario = $pecuario_obj->getItem();
        $current_view = "pecuario/detallesView.php";

        require_once 'views/layouts/'.$this->layout;
    }
        // -------------------------------------------------------------------------------------------------------------------------------

    public function borrar(){

        $Doc = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto usuario
        $pecuario_obj = new Pecuario($Doc);


        //Conseguimos todos los usuarios
        $onepecuario = $pecuario_obj->delete();
        header("Location:index.php?controller=pecuario&action=index");
    }

    // -------------------------------------------------------------------------------------------------------------------------------
    public function editView(){
        $Doc = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto usuario
        $pecuario_obj = new Pecuario($Doc);

        //Conseguimos todos los usuarios

        $onepecuario = $pecuario_obj->getItem();
        $current_view = "pecuario/editarView.php";

        require_once 'views/layouts/'.$this->layout;
    }

        // -------------------------------------------------------------------------------------------------------------------------------
    public function create()
    {
       if (isset($_POST["txtApe_nombre"])) {
            $Ape_nombre = isset($_POST['txtApe_nombre']) ? $_POST['txtApe_nombre'] :"";
            $Ape_codigo = isset($_POST['txtApe_codigo']) ? $_POST['txtApe_codigo'] :"";
            $Ape_tipo = isset($_POST['txtApe_tipo']) ? $_POST['txtApe_tipo'] :"";
            $Ape_fecha_creacion  = isset($_POST['txtApe_fecha_creacion']) ? $_POST['txtApe_fecha_creacion'] :"";
            $Ape_Foto  = isset($_POST['txtApe_Foto']) ? $_POST['txtApe_Foto'] :"";
            $Ape_Descripcion  = isset($_POST['txtApe_Descripcion']) ? $_POST['txtApe_Descripcion'] :"";
            // Crear Objeto agricola_pecuario con los datos del formulario
            $pecuario_obj = new Pecuario($Ape_codigo, $Ape_nombre, $Ape_tipo, $Ape_fecha_creacion, $Ape_Foto, $Ape_Descripcion);

            // Se llama al metodo que inserta en la base de datos.
            // Se envía por parámetro el objeto de la clase agricola_pecuario
            $pecuario_obj->save();

        }
        header("Location:index.php?controller=pecuario&action=index");
    }
        // -------------------------------------------------------------------------------------------------------------------------------

    public function update()
    {
        if (isset($_POST["txtApe_codigo"])) {
            $Ape_nombre = isset($_POST['txtApe_nombre']) ? $_POST['txtApe_nombre'] :"";
            $Ape_codigo = isset($_POST['txtApe_codigo']) ? $_POST['txtApe_codigo'] :"";
            $Ape_tipo = isset($_POST['txtApe_tipo']) ? $_POST['txtApe_tipo'] :"";
            $Ape_fecha_creacion  = isset($_POST['txtApe_fecha_creacion']) ? $_POST['txtApe_fecha_creacion'] :"";
            $Ape_Foto  = isset($_POST['txtApe_Foto']) ? $_POST['txtApe_Foto'] :"";
            $Ape_Descripcion  = isset($_POST['txtApe_Descripcion']) ? $_POST['txtApe_Descripcion'] :"";
            // Crear Objeto Paciente con los datos del formulario
            $pecuario_obj = new Pecuario($Ape_codigo, $Ape_nombre, $Ape_tipo, $Ape_fecha_creacion, $Ape_Foto, $Ape_Descripcion);
            // Se llama al metodo que inserta en la base de datos.
            // Se envía por parámetro el objeto de la clase paciente
            $pecuario_obj->edit();
        }
        header("Location:index.php?controller=pecuario&action=index");
    }
 }
