<?php

class ProductoController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function indexProducto()
    {
        //Creamos el objeto producto
        $producto_obj = new Producto();

        //Conseguimos todos los producto
        $allProducto = $producto_obj->getAll();

       $current_view = "GranjeroViews/ListarProducto.php";
        require_once 'views/layouts/'.$this->layout_gran;

        //require_once 'views/producto/indexView.php';
    }
    
    public function DetallesProducto()
    {
        
        $Doc = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto producto
        $producto_obj = new Producto($Doc);

        //Conseguimos todos los producto
        $selectedProducto = $producto_obj->selectedItem();
        
        $current_view = "GranjeroViews/DetallesProducto.php";
        require_once 'views/layouts/'.$this->layout_gran;

        //include_once('views/producto/detailView.php');
    }
    
    public function CrearProductoGran(){
        $current_view = "GranjeroViews/CrearProducto.php";
        require_once 'views/layouts/'.$this->layout_gran;

        //require_once 'views/producto/createView.php';
    }
    
    public function index()
    {
        //Creamos el objeto producto
        $producto_obj = new Producto();

        //Conseguimos todos los producto
        $allProducto = $producto_obj->getAll();

       $current_view = "producto/indexView.php";
        require_once 'views/layouts/'.$this->layout;

    }
    public function selectedPro(){
        
    }
   

    public function detailView()
    {
        
        $Doc = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto producto
        $producto_obj = new Producto($Doc);

        //Conseguimos todos los producto
        $selectedProducto = $producto_obj->selectedItem();
        $current_view = "producto/detailView.php";
        require_once 'views/layouts/'.$this->layout;

        //include_once('views/producto/detailView.php');
    }

    public function editView()
    {
        $Doc = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto producto
        $producto_obj = new Producto($Doc);

        //Conseguimos todos los producto
        $selectedProducto = $producto_obj->selectedItem();
        $current_view = "producto/editView.php";
        require_once 'views/layouts/'.$this->layout;
        
        //require_once 'views/producto/editView.php';
    }

    public function borrar(){
        $idProducto = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto producto
        $producto_obj = new Producto($idProducto);
        

        //Conseguimos todos los productos
        $oneProducto = $producto_obj->delete();
        header("Location:index.php?controller=Producto&action=index");
    }

    public function crearProducto(){
        $current_view = "producto/createView.php";
        require_once 'views/layouts/'.$this->layout;

        //require_once 'views/producto/createView.php';
    }

   

    public function create()
    {
        if (isset($_POST["txtPro_nombre"])) {
            $pro_nombre = isset($_POST['txtPro_nombre']) ? $_POST['txtPro_nombre'] :"";
            $pro_codigo = isset($_POST['txtPro_codigo']) ? $_POST['txtPro_codigo'] :"";
            $pro_descripcion = isset($_POST['txtPro_descripcion']) ? $_POST['txtPro_descripcion'] :"";
            $pro_precio = isset($_POST['txtPro_precio']) ? $_POST['txtPro_precio'] :"";
            $pro_estado = isset($_POST['txtPro_estado']) ? $_POST['txtPro_estado'] :"";
            $pro_cantidad = isset($_POST['txtPro_cantidad']) ? $_POST['txtPro_cantidad'] :"";
            $pro_terminos_y_condiciones = isset($_POST['txtPro_terminos']) ? $_POST['txtPro_terminos'] :"";
            $pro_foto = isset($_POST['txtPro_foto']) ? $_POST['txtPro_foto'] :"";

            // Crear Objeto Paciente con los datos del formulario
            $producto_obj = new Producto($pro_codigo, $pro_nombre, $pro_descripcion, $pro_precio, $pro_estado, $pro_cantidad, $pro_terminos_y_condiciones, $pro_foto);

            // Se llama al metodo que inserta en la base de datos.
            // Se envía por parámetro el objeto de la clase producto
            $producto_obj->save();

        }
        header("Location:index.php?controller=Producto&action=indexProducto");
    }

    public function update()
    {
       
        if (isset($_POST["txtPro_codigo"])) {
            $pro_nombre = isset($_POST['txtPro_nombre']) ? $_POST['txtPro_nombre'] :"";
            $pro_codigo = isset($_POST['txtPro_codigo']) ? $_POST['txtPro_codigo'] :"";
            $pro_descripcion = isset($_POST['txtPro_descripcion']) ? $_POST['txtPro_descripcion'] :"";
            $pro_precio = isset($_POST['txtPro_precio']) ? $_POST['txtPro_precio'] :"";
            $pro_estado = isset($_POST['txtPro_estado']) ? $_POST['txtPro_estado'] :"";
            $pro_cantidad = isset($_POST['txtPro_cantidad']) ? $_POST['txtPro_cantidad'] :"";
            $pro_terminos_y_condiciones = isset($_POST['txtPro_terminos']) ? $_POST['txtPro_terminos'] :"";
            $pro_foto = isset($_POST['txtPro_foto']) ? $_POST['txtPro_foto'] :"";
            // Crear Objeto Producto con los datos del formulario
            $producto_obj = new Producto($pro_codigo, $pro_nombre, $pro_descripcion, $pro_precio, $pro_estado, $pro_cantidad, $pro_terminos_y_condiciones, $pro_foto);

            // Se llama al metodo que inserta en la base de datos.
            // Se envía por parámetro el objeto de la clase producto
            $producto_obj->edit();

        }
        header("Location:index.php?controller=Producto&action=index");
    }
}
