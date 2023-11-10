<?php

class NoticiasController extends BaseController {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        //Creamos el objeto producto
        $noticias_obj = new Noticias();

        //Conseguimos todos los producto
        $allNoticias = $noticias_obj->getAll();
        $current_view = "noticias/indexView.php";
        require_once 'views/layouts/' . $this->layout;

        //require_once 'views/noticias/indexView.php';
    }

    public function indexNoticias() {
        //Creamos el objeto producto
        $noticias_obj = new Noticias();

        //Conseguimos todos los producto
        $allNoticias = $noticias_obj->getAll();
        $current_view = "GranjeroViews/ListarNoticias.php";
        require_once 'views/layouts/' . $this->layout_gran;

        //require_once 'views/noticias/indexView.php';
    }

    public function detalleNoticias() {

        $Doc = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto producto
        $noticias_obj = new Noticias($Doc);

        //Conseguimos todos los producto
        $selectedNoticias = $noticias_obj->selectedItem();
        $current_view = "GranjeroViews/DetallesNoticias.php";
        require_once 'views/layouts/' . $this->layout_gran;

        //include_once('views/noticias/detailView.php');
    }

    public function detailView() {

        $Doc = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto producto
        $noticias_obj = new Noticias($Doc);

        //Conseguimos todos los producto
        $selectedNoticias = $noticias_obj->selectedItem();
        $current_view = "noticias/detailView.php";
        require_once 'views/layouts/' . $this->layout;

        //include_once('views/noticias/detailView.php');
    }

    public function editView() {
        $Doc = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto producto
        $noticias_obj = new Noticias($Doc);

        //Conseguimos todos los producto
        $selectedNoticias = $noticias_obj->selectedItem();
        $current_view = "noticias/editView.php";
        require_once 'views/layouts/' . $this->layout;

        //require_once 'views/noticias/editView.php';
    }

    public function borrar() {
        $idNoticias = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto canasta
        $noticias_obj = new Noticias($idNoticias);


        //Conseguimos todos los canasta
        $oneNoticias = $noticias_obj->delete();
        header("Location:index.php?controller=Noticias&action=index");
    }

    public function crearNoticias() {
        $current_view = "noticias/createView.php";
        require_once 'views/layouts/' . $this->layout;

        //require_once 'views/noticias/createView.php';
    }

    
    public function create() {
        if (isset($_POST["txtNot_nombre"])) {
            $not_nombre = isset($_POST['txtNot_nombre']) ? $_POST['txtNot_nombre'] : "";
            $not_codigo = isset($_POST['txtNot_codigo']) ? $_POST['txtNot_codigo'] : "";
            $not_descripcion = isset($_POST['txtNot_descripcion']) ? $_POST['txtNot_descripcion'] : "";
            $not_foto = isset($_POST['txtNot_foto']) ? $_POST['txtNot_foto'] : "";
            $not_fecha_creacion = isset($_POST['txtNot_fecha_creacion']) ? $_POST['txtNot_fecha_creacion'] : "";
            $not_url = isset($_POST['txtNot_url']) ? $_POST['txtNot_url'] : "";
            $not_subtitulo = isset($_POST['txtNot_subtitulo']) ? $_POST['txtNot_subtitulo']:"";


            // Crear Objeto Noticias con los datos del formulario
            $noticias_obj = new Noticias($not_codigo, $not_nombre, $not_descripcion, $not_foto, $not_fecha_creacion, $not_url, $not_subtitulo);

            // Se llama al metodo que inserta en la base de datos.
            // Se envía por parámetro el objeto de la clase producto
            $noticias_obj->save();
        }
        header("Location:index.php?controller=Noticias&action=index");
    }

    public function update() {
        if (isset($_POST["txtNot_codigo"])) {
            $not_nombre = isset($_POST['txtNot_nombre']) ? $_POST['txtNot_nombre'] : "";
            $not_codigo = isset($_POST['txtNot_codigo']) ? $_POST['txtNot_codigo'] : "";
            $not_descripcion = isset($_POST['txtNot_descripcion']) ? $_POST['txtNot_descripcion'] : "";
            $not_foto = isset($_POST['txtNot_foto']) ? $_POST['txtNot_foto'] : "";
            $not_fecha_creacion = isset($_POST['txtNot_fecha_creacion']) ? $_POST['txtNot_fecha_creacion'] : "";
            $not_url = isset($_POST['txtNot_url']) ? $_POST['txtNot_url'] : "";
            $not_subtitulo = isset($_POST['txtNot_subtitulo']) ? $_POST['txtNot_subtitulo']:"";


            // Crear Objeto Producto con los datos del formulario
            $noticias_obj = new Noticias($not_codigo, $not_nombre, $not_descripcion, $not_foto, $not_fecha_creacion, $not_url, $not_subtitulo);

            // Se llama al metodo que inserta en la base de datos.
            // Se envía por parámetro el objeto de la clase producto
            $noticias_obj->edit();
        }
        header("Location:index.php?controller=Noticias&action=index");
    }

    

}
