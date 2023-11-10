<?php

class CanastaController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        //Creamos el objeto producto
        $canasta_obj = new Canasta();

        //Conseguimos todos los producto
        $allCanasta = $canasta_obj->getAll();
        $current_view = "canasta/indexView.php";
        require_once 'views/layouts/'.$this->layout;

        //require_once 'views/canasta/indexView.php';
    }
    public function indexCanasta()
    {
        //Creamos el objeto producto
        $canasta_obj = new Canasta();

        //Conseguimos todos los producto
        $allCanasta = $canasta_obj->getAll();
        $current_view = "GranjeroViews/ListarCanasta.php";
        require_once 'views/layouts/'.$this->layout_gran;

       // require_once 'views/GranjeroViews/canastaView.php';
    }
   

    public function detailView()
    {
        
        $Doc = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto producto
        $canasta_obj = new Canasta($Doc);

        //Conseguimos todos los producto
        $selectedCanasta = $canasta_obj->selectedItem();
        $current_view = "canasta/detailView.php";
        require_once 'views/layouts/'.$this->layout;

        //include_once('views/canasta/detailView.php');
    }

    public function editView()
    {
        $Doc = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto producto
        $canasta_obj = new Canasta($Doc);

        //Conseguimos todos los producto
        $selectedCanasta = $canasta_obj->selectedItem();
        $current_view = "canasta/editView.php";
        require_once 'views/layouts/'.$this->layout;
        
        //require_once 'views/canasta/editView.php';
    }

    public function borrar(){
        $idCanasta = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto canasta
        $canasta_obj = new Canasta($idCanasta);
        
        //Conseguimos todos los canasta
        $oneCanasta = $canasta_obj->delete();
        header("Location:index.php?controller=Canasta&action=index");
    }

    public function crearCanasta(){
        $current_view = "canasta/createView.php";
        require_once 'views/layouts/'.$this->layout;

        //require_once 'views/canasta/createView.php';
    }

   

    public function create()
    {
        if (isset($_POST["txtCta_nombre"])) {
            $cta_nombre = isset($_POST['txtCta_nombre']) ? $_POST['txtCta_nombre'] :"";
            $cta_codigo = isset($_POST['txtCta_codigo']) ? $_POST['txtCta_codigo'] :"";
            $cta_precio = isset($_POST['txtCta_precio']) ? $_POST['txtCta_precio'] :"";
            $cta_fecha = isset($_POST['txtCta_fecha']) ? $_POST['txtCta_fecha'] :"";
            $cta_ciudad = isset($_POST['txtCta_ciudad']) ? $_POST['txtCta_ciudad'] :"";
            

            // Crear Objeto Paciente con los datos del formulario
            $canasta_obj = new Canasta($cta_codigo,$cta_nombre,$cta_precio,$cta_fecha,$cta_ciudad);

            // Se llama al metodo que inserta en la base de datos.
            // Se envía por parámetro el objeto de la clase producto
            $canasta_obj->save();

        }
        header("Location:index.php?controller=Canasta&action=index");
    }

    public function update()
    {
       
        if (isset($_POST["txtCta_codigo"])) {
            $cta_nombre = isset($_POST['txtCta_nombre']) ? $_POST['txtCta_nombre'] :"";
            $cta_codigo = isset($_POST['txtCta_codigo']) ? $_POST['txtCta_codigo'] :"";
            $cta_precio = isset($_POST['txtCta_precio']) ? $_POST['txtCta_precio'] :"";
            $cta_fecha = isset($_POST['txtCta_fecha']) ? $_POST['txtCta_fecha'] :"";
            $cta_ciudad = isset($_POST['txtCta_ciudad']) ? $_POST['txtCta_ciudad'] :"";
           
            // Crear Objeto Producto con los datos del formulario
            $canasta_obj = new Canasta($cta_codigo,$cta_nombre,$cta_precio,$cta_fecha,$cta_ciudad);

            // Se llama al metodo que inserta en la base de datos.
            // Se envía por parámetro el objeto de la clase producto
            $canasta_obj->edit();

        }
        header("Location:index.php?controller=Canasta&action=index");
    }
}
