<?php

class ServiciosController extends BaseController{
    public function __construct() {
        parent::__construct();
    }
    
    //usado para llamar al formulario principal de listar empresas
    public function index() {
        //Creamos el objeto empresas
        $servicios_obj = new Servicios();

        //Conseguimos todos las empresas
        $allServicios = $servicios_obj->getAll();
        //incluye la vista de consultor listar index
       
        $current_view = 'servicios/indexView.php';
        require_once 'views/layouts/' . $this->layout;
    }
    
    //llama al formulario agregar empresa
    public function Crear() {
        //incluye la vista de agregar empresa
        $current_view = 'servicios/AgregarServiciosView.php';
        require_once 'views/layouts/' . $this->layout;
    }
    
     //llama al formulario de editar empresa
    public function editar() {
        //trae el ID del empresa
        $Doc = isset($_GET['id']) ? $_GET['id'] : "";

        //Creamos el objeto de empresa
        $servicios_obj = new Servicios($Doc);

        //Conseguimos todos las empresas
        $oneServicio = $servicios_obj->getItem();
        //incluye la vista de editar empresa
        $current_view = 'servicios/EditarServiciosView.php';
        require_once 'views/layouts/' . $this->layout;
    }
    
    //llama al formulario de detalles de empresa
    public function detalle() {
        //trae el ID del empresa
        $Doc = isset($_GET['id']) ? $_GET['id'] : "";

        //Creamos el objeto empresa
        $servicios_obj = new Servicios($Doc);

        //Conseguimos todos los empresa
        $oneServicio = $servicios_obj->getItem();
        //incluye la vista de detalles empresa
        $current_view = 'servicios/DetalleServiciosView.php';
        require_once 'views/layouts/' . $this->layout;
    }
    
    public function borrar(){
        $Doc = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto empresa
        $servicios_obj = new Servicios($Doc);
        

        //Conseguimos a el empresa
        $oneServicio = $servicio_obj->delete();
        header("Location:index.php?controller=Servicio&action=index");
        
    }
    
    //llama al metodo de crear paciente
    public function create() {
        //valida que exista al menos el nombre del paciente
        if (isset($_POST["txtSer_nombre"])) {
            $ser_codigo = ($_POST['txtSer_codigo']) ? $_POST['txtSer_codigo'] : "";
            $ser_nombre = isset($_POST['txtSer_nombre']) ? $_POST['txtSer_nombre'] : "";
            $ser_descripcion = isset($_POST['txtSer_descripcion']) ? $_POST['txtSer_descripcion'] : "";
            $ser_valor = isset($_POST['txtSer_valor']) ? $_POST['txtSer_valor'] : "";
            $ser_foto = isset($_POST['txtSer_foto']) ? $_POST['txtSer_foto'] : "";
            $FK_ser_emp_codigo = isset($_POST['txtFK_ser_emp_codigo']) ? $_POST['txtFK_ser_emp_codigo']:"";
            

            // Crear Objeto Paciente con los datos del formulario
            $servicios_obj = new Servicios($ser_codigo, $ser_nombre, $ser_descripcion, $ser_valor, $ser_foto, $FK_ser_emp_codigo);
            // Se llama al metodo que inserta en la base de datos.
            // Se envía por parámetro el objeto de la clase paciente
            $servicios_obj->save();
        }
        header("Location:index.php?controller=Servicios&action=index");
    }

    public function update() {

        if (isset($_POST["txtSer_codigo"])) {
            $ser_codigo = ($_POST['txtSer_codigo']) ? $_POST['txtSer_codigo'] : "";
            $ser_nombre = isset($_POST['txtSer_nombre']) ? $_POST['txtSer_nombre'] : "";
            $ser_descripcion = isset($_POST['txtSer_descripcion']) ? $_POST['txtSer_descripcion'] : "";
            $ser_valor = isset($_POST['txtSer_valor']) ? $_POST['txtSer_valor'] : "";
            $ser_foto = isset($_POST['txtSer_foto']) ? $_POST['txtSer_foto'] : "";
            $FK_ser_emp_codigo = isset($_POST['txtFK_ser_emp_codigo']) ? $_POST['txtFK_ser_emp_codigo']:"";
            

            // Crear Objeto Paciente con los datos del formulario
            $servicios_obj = new Servicios($ser_codigo, $ser_nombre, $ser_descripcion, $ser_valor, $ser_foto, $FK_ser_emp_codigo);
            // Se llama al metodo que inserta en la base de datos.
            // Se envía por parámetro el objeto de la clase paciente
            $servicios_obj->edit();
        }
        header("Location:index.php?controller=Servicios&action=index");
    }
}
