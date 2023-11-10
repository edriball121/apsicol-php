<?php

class CiudadController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        //Creamos el objeto producto
        $ciudad_obj = new Ciudad();

        //Conseguimos todos los producto
        $allCiudad = $ciudad_obj->getAll();
        $current_view = "ciudad/indexView.php";
        require_once 'views/layouts/'.$this->layout;

        //require_once 'views/ciudad/indexView.php';
    }
   
    public function detailView()
    {
        
        $Doc = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto producto
        $ciudad_obj = new Ciudad($Doc);

        //Conseguimos todos los producto
        $selectedCiudad = $ciudad_obj->selectedItem();
        $current_view = "ciudad/detailView.php";
        require_once 'views/layouts/'.$this->layout;

       //include_once('views/ciudad/detailView.php');
    }

    public function editView()
    {
        $Doc = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto producto
        $ciudad_obj = new Ciudad($Doc);

        //Conseguimos todos los producto
        $selectedCiudad = $ciudad_obj->selectedItem();
        $current_view = "ciudad/editView.php";
        require_once 'views/layouts/'.$this->layout;
        
        //require_once 'views/ciudad/editView.php';
    }

    public function borrar(){
        $idCiudad = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto canasta
        $ciudad_obj = new Ciudad($idCiudad);
        

        //Conseguimos todos los canasta
        $oneCiudad = $ciudad_obj->delete();
        header("Location:index.php?controller=Ciudad&action=index");
    }

    public function crearCiudad(){
        $current_view = "ciudad/createView.php";
        require_once 'views/layouts/'.$this->layout;

       // require_once 'views/ciudad/createView.php';
    }

  
    
    public function create()
    {
        if (isset($_POST["txtCiu_nombre"])) {
            $ciu_nombre = isset($_POST['txtCiu_nombre']) ? $_POST['txtCiu_nombre'] :"";
            $ciu_codigo = isset($_POST['txtCiu_codigo']) ? $_POST['txtCiu_codigo'] :"";
            $ciu_estado = isset($_POST['txtCiu_estado']) ? $_POST['txtCiu_estado'] :"";
            
            // Crear Objeto ciudad con los datos del formulario
            $ciudad_obj = new Ciudad($ciu_codigo,$ciu_nombre,$ciu_estado);

            // Se llama al metodo que inserta en la base de datos.
            // Se envía por parámetro el objeto de la clase producto
            $ciudad_obj->save();

        }
        header("Location:index.php?controller=Ciudad&action=index");
    }


    public function update()
    {
       
        if (isset($_POST["txtCiu_codigo"])) {
            $ciu_nombre = isset($_POST['txtCiu_nombre']) ? $_POST['txtCiu_nombre'] :"";
            $ciu_codigo = isset($_POST['txtCiu_codigo']) ? $_POST['txtCiu_codigo'] :"";
            $ciu_estado = isset($_POST['txtCiu_estado']) ? $_POST['txtCiu_estado'] :"";
            
           
            // Crear Objeto Producto con los datos del formulario
            $ciudad_obj = new Ciudad($ciu_codigo,$ciu_nombre,$ciu_estado);

            // Se llama al metodo que inserta en la base de datos.
            // Se envía por parámetro el objeto de la clase producto
            $ciudad_obj->edit();

        }
        header("Location:index.php?controller=Ciudad&action=index");
    }
}
