<?php

class ConsultaController extends BaseController
{

    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        //Creamos el objeto producto
        
        $consulta_obj= new Consulta();
        
        //Conseguimos todos los producto
        $allConsulta = $consulta_obj->getAll();
        $current_view = "Consulta/Index.php";
        require_once 'views/layouts/'.$this->layout;

    }

    public function detailView()
    {
        
        $Doc = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto producto
        $consulta_obj = new Consulta($Doc);

        //Conseguimos todos los producto
        $selectConsulta = $consulta_obj->getItem();
        $current_view = "ConsultorViews/DetallesConsulta.php";
        require_once 'views/layouts/'.$this->layout_cons;
    }

    public function editView()
    {
       $Doc = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto producto
        $consulta_obj = new Consulta($Doc);

        //Conseguimos todos los producto
        $selectConsulta = $consulta_obj->getItem();
        $current_view = "ConsultorViews/EditarConsulta.php";
        require_once 'views/layouts/'.$this->layout_cons;
    }

    public function borrar(){
        $Doc = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto canasta
        $consulta_obj = new Consulta($Doc);
        
        //Conseguimos todos los canasta
        $oneConsulta = $consulta_obj->delete();
        header("Location:index.php?controller=Consulta&action=index");
    }

    public function CrearConsulta(){
        $current_view = "ConsultorViews/CrearConsulta.php";
        require_once 'views/layouts/'.$this->layout_cons;

    }

    

    public function crear()
    {
        if (isset($_POST["txtCon_nombre"])) {
            $con_rad = isset($_POST['txtCon_radicado']) ? $_POST['txtCon_radicado'] :"";
            $con_nom = isset($_POST['txtCon_nombre']) ? $_POST['txtCon_nombre'] :"";
            $con_tipo = isset($_POST['txt_con_tipo']) ? $_POST['txt_con_tipo'] :"";
            $con_descrip = isset($_POST['txt_con_descripcion']) ? $_POST['txt_con_descripcion'] :"";
            $con_fec = isset($_POST['txt_con_fecha']) ? $_POST['txt_con_fecha'] :"";
            $con_esta = isset($_POST['txt_con_estado']) ? $_POST['txt_con_estado'] :"";
            $con_calif = isset($_POST['txt_con_calificacion']) ? $_POST['txt_con_calificacion'] :"";
            $con_fecha_fin = isset($_POST['txt_con_fecha_fin']) ? $_POST['txt_con_fecha_fin'] :"";
            $FK_con_gra_ced = isset($_POST['txtFK_con_gra_cedula']) ? $_POST['txtFK_con_gra_cedula'] :"";

            // Crear Objeto Paciente con los datos del formulario
            $consulta_obj = new Consulta($con_rad, $con_nom, $con_tipo, $con_descrip, $con_fec, $con_esta, $con_calif, $con_fecha_fin, $FK_con_gra_ced);

            // Se llama al metodo que inserta en la base de datos.
            // Se envía por parámetro el objeto de la clase producto
            $consulta_obj->save();

        }
        header("Location:index.php?controller=inicio&action=indexGranjero");
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
        header("Location:index.php?controller=Consulta&action=index");
    }
}
