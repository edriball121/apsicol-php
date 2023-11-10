<?php

class EmpresaController extends BaseController {

    public function __construct() {
        parent::__construct();
    }

    //usado para llamar al formulario principal de listar empresas
    public function indexEmpresa() {
        //Creamos el objeto empresas
        $empresa_obj = new Empresa();

        //Conseguimos todos las empresas
        $allEmpresas = $empresa_obj->getAll();

        //incluye la vista de consultor listar index
        $current_view = 'GranjeroViews/ListarEmpresa.php';
        require_once 'views/layouts/' . $this->layout_gran;
    }

    public function EmpresaDetalle() {
        //trae el ID del empresa
        $Doc = isset($_GET['id']) ? $_GET['id'] : "";

        //Creamos el objeto empresa
        $empresa_obj = new Empresa($Doc);

        //Conseguimos todos los empresa
        $oneEmpresa = $empresa_obj->getItem();

        //incluye la vista de detalles empresa
        $current_view = 'GranjeroViews/DetallesEmpresa.php';
        require_once 'views/layouts/' . $this->layout_gran;
    }

    public function index() {
        //Creamos el objeto empresas
        $empresa_obj = new Empresa();

        //Conseguimos todos las empresas
        $allEmpresas = $empresa_obj->getAll();
        //incluye la vista de consultor listar index

        $current_view = 'empresa/indexView.php';
        require_once 'views/layouts/' . $this->layout;
    }

    //llama al formulario agregar empresa
    public function Crear() {
        //incluye la vista de agregar empresa
        $current_view = 'empresa/AgregarEmpresaView.php';
        require_once 'views/layouts/' . $this->layout;
    }

    //llama al formulario de editar empresa
    public function editar() {
        //trae el ID del empresa
        $Doc = isset($_GET['id']) ? $_GET['id'] : "";

        //Creamos el objeto de empresa
        $empresa_obj = new Empresa($Doc);

        //Conseguimos todos las empresas
        $oneEmpresa = $empresa_obj->getItem();
        //incluye la vista de editar empresa
        $current_view = 'empresa/EditarEmpresaView.php';
        require_once 'views/layouts/' . $this->layout;
    }

    //llama al formulario de detalles de empresa
    public function detalle() {
        //trae el ID del empresa
        $Doc = isset($_GET['id']) ? $_GET['id'] : "";

        //Creamos el objeto empresa
        $empresa_obj = new Empresa($Doc);

        //Conseguimos todos los empresa
        $oneEmpresa = $empresa_obj->getItem();
        //incluye la vista de detalles empresa
        $current_view = 'empresa/DetalleEmpresaView.php';
        require_once 'views/layouts/' . $this->layout;
    }

    public function borrar() {
        $Doc = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto empresa
        $empresa_obj = new Empresa($Doc);


        //Conseguimos a el empresa
        $oneEmpresa = $empresa_obj->delete();
        header("Location:index.php?controller=Empresa&action=index");
    }

    //llama al metodo de crear paciente
    public function create() {
        //valida que exista al menos el nombre del paciente
        if (isset($_POST['txtEmp_nombre'])) {

            $Archivo = $_FILES['txtEmp_foto']['tmp_name'];
            if (empty($Archivo)) {
                $nombreImagen = "phpBDB6.tmp.png";
            } else {
                $destino = 'uploads/imgEmpresas';
                $nombreImagen = basename($Archivo);
                $sep = explode('image/', $_FILES['txtEmp_foto']["type"]);
                $tipo = $sep[1];
                if ($tipo == "gif" || $tipo == "jpeg" || $tipo == "bmp" || $tipo == "png") { // Si el tipo de imagen a subir es el mismo de los permitidos, segimos. Puedes agregar mas tipos de imagen
                    $nombreImagen = $nombreImagen . "." . $tipo;
                    move_uploaded_file($Archivo, $destino . '/' . $nombreImagen);
                }
            }


            $emp_codigo = isset($_POST['txtEmp_codigo']) ? $_POST['txtEmp_codigo'] : "";
            $emp_nombre = isset($_POST['txtEmp_nombre']) ? $_POST['txtEmp_nombre'] : "";
            $emp_descripcion = isset($_POST['txtEmp_descripcion']) ? $_POST['txtEmp_descripcion'] : "";
            $emp_telefono = isset($_POST['txtEmp_telefono']) ? $_POST['txtEmp_telefono'] : "";
            //$emp_foto = isset($_POST['txtEmp_foto']) ? $_POST['txtEmp_foto'] : "";
            // Crear Objeto Paciente con los datos del formulario
            $empresa_obj = new Empresa($emp_codigo, $emp_nombre, $emp_descripcion, $emp_telefono, $nombreImagen);
            // Se llama al metodo que inserta en la base de datos.
            // Se envía por parámetro el objeto de la clase paciente
            $empresa_obj->save();
        }
        header("Location:index.php?controller=Empresa&action=index");
    }

    public function update() {

        if (isset($_POST["txtEmp_codigo"])) {
            $Archivo = $_FILES['txtEmp_foto']['tmp_name'];
            if (empty($Archivo)) {
                $nombreImagen = "phpBDB6.tmp.png";
            } else {
                $destino = 'uploads';
                $nombreImagen = basename($Archivo);
                $sep = explode('image/', $_FILES['txtEmp_foto']["type"]);
                $tipo = $sep[1];
                if ($tipo == "gif" || $tipo == "jpeg" || $tipo == "bmp" || $tipo == "png") { // Si el tipo de imagen a subir es el mismo de los permitidos, segimos. Puedes agregar mas tipos de imagen
                    $nombreImagen = $nombreImagen . "." . $tipo;
                    move_uploaded_file($Archivo, $destino . '/' . $nombreImagen);
                }
            }
            $emp_codigo = isset($_POST['txtEmp_codigo']) ? $_POST['txtEmp_codigo'] : "";
            $emp_nombre = isset($_POST['txtEmp_nombre']) ? $_POST['txtEmp_nombre'] : "";
            $emp_descripcion = isset($_POST['txtEmp_descripcion']) ? $_POST['txtEmp_descripcion'] : "";
            $emp_telefono = isset($_POST['txtEmp_telefono']) ? $_POST['txtEmp_telefono'] : "";
            $emp_foto = isset($_POST['txtEmp_foto']) ? $_POST['txtEmp_foto'] : "";


            // Crear Objeto Paciente con los datos del formulario
            $empresa_obj = new Empresa($emp_codigo, $emp_nombre, $emp_descripcion, $emp_telefono, $emp_foto);
            // Se llama al metodo que inserta en la base de datos.
            // Se envía por parámetro el objeto de la clase paciente
            $empresa_obj->edit();
        }
        header("Location:index.php?controller=Empresa&action=index");
    }

}
