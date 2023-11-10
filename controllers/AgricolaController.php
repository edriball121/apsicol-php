<?php

class AgricolaController extends BaseController {

    public function __construct() {
        parent::__construct();
    }

    // -------------------------------------------------------------------------------------------------------------------------------

    public function index() {
        //Creamos el objeto usuario
        $agricolapecuario_obj = new Agricola();
        
        //Conseguimos todos los usuarios
        $allagricolapecuario = $agricolapecuario_obj->getAll();

        $current_view = "agricola/indexView.php";

        require_once 'views/layouts/' . $this->layout;
    }

    // -------------------------------------------------------------------------------------------------------------------------------

    public function indexAgricola() {
        //Creamos el objeto usuario
        $agricola_obj = new Agricola();

        //Conseguimos todos los usuarios
        $allagricola = $agricola_obj->getAll();

        $current_view = "GranjeroViews/ListaAgricola.php";

        require_once 'views/layouts/' . $this->layout_gran;
    }

    // -------------------------------------------------------------------------------------------------------------------------------

    public function DetallesAgricola() {
        $Doc = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto usuario
        $agricola_obj = new Agricola($Doc);

        $allagricola = $agricola_obj->getAll();

        //Conseguimos todos los usuarios
        $oneagricola = $agricola_obj->getItem();
        $current_view = "GranjeroViews/DetallesAgricola.php";
        require_once 'views/layouts/' . $this->layout_gran;
    }

    //_____________________________________________________________________________________________________________________________________

    public function crear() {
        $current_view = "agricola/agregarView.php";

        require_once 'views/layouts/' . $this->layout;
    }

    // -------------------------------------------------------------------------------------------------------------------------------


    public function ver() {
        $Doc = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto usuario
        $agricolapecuario_obj = new Agricola($Doc);

        //Conseguimos todos los usuarios
        $oneagricolapecuario = $agricolapecuario_obj->getItem();
        $current_view = "agricola/detallesView.php";
        require_once 'views/layouts/' . $this->layout;
    }

    // -------------------------------------------------------------------------------------------------------------------------------

    public function borrar() {

        $Doc = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto usuario
        $agricolapecuario_obj = new Agricola($Doc);


        //Conseguimos todos los usuarios
        $oneAgricolapecuario = $agricolapecuario_obj->delete();
        header("Location:index.php?controller=Agricola&action=index");
    }

    // -------------------------------------------------------------------------------------------------------------------------------
    public function editView() {
        $Doc = isset($_GET['id']) ? $_GET['id'] : "";
        //Creamos el objeto usuario
        $agricolapecuario_obj = new Agricola($Doc);

        //Conseguimos todos los usuarios

        $oneAgricolapecuario = $agricolapecuario_obj->getItem();
        $current_view = "agricola/editarView.php";
        require_once 'views/layouts/' . $this->layout;
    }

    // -------------------------------------------------------------------------------------------------------------------------------
    public function create() {
        if (isset($_POST["txtApe_nombre"])) {

            $Archivo = $_FILES['txtApe_Foto']['tmp_name'];
            if (empty($Archivo)) {
                $nombreImagen = "phpBDB6.tmp.png";
            } else {
                $destino = 'uploads/imgAgricola';
                $nombreImagen = basename($Archivo);
                $sep = explode('image/', $_FILES['txtApe_Foto']["type"]);
                $tipo = $sep[1];
                if ($tipo == "gif" || $tipo == "jpeg" || $tipo == "bmp" || $tipo == "png") { // Si el tipo de imagen a subir es el mismo de los permitidos, segimos. Puedes agregar mas tipos de imagen
                    $nombreImagen = $nombreImagen . "." . $tipo;
                    move_uploaded_file($Archivo, $destino . '/' . $nombreImagen);
                }
            }

            $Ape_nombre = isset($_POST['txtApe_nombre']) ? $_POST['txtApe_nombre'] : "";
            $Ape_codigo = isset($_POST['txtApe_codigo']) ? $_POST['txtApe_codigo'] : "";
            $Ape_tipo = isset($_POST['txtApe_tipo']) ? $_POST['txtApe_tipo'] : "";
            $Ape_fecha_creacion = isset($_POST['txtApe_fecha_creacion']) ? $_POST['txtApe_fecha_creacion'] : "";
            //$Ape_Foto = isset($_POST['txtApe_Foto']) ? $_POST['txtApe_Foto'] : "";
            $Ape_Descripcion = isset($_POST['txtApe_Descripcion']) ? $_POST['txtApe_Descripcion'] : "";
            // Crear Objeto agricola_pecuario con los datos del formulario
            $agricola_pecuario_obj = new Agricola($Ape_codigo, $Ape_nombre, $Ape_tipo, $Ape_fecha_creacion, $nombreImagen, $Ape_Descripcion);

            // Se llama al metodo que inserta en la base de datos.
            // Se envía por parámetro el objeto de la clase agricola_pecuario
            $agricola_pecuario_obj->save();
        }
        header("Location:index.php?controller=Agricola&action=index");
    }

    // -------------------------------------------------------------------------------------------------------------------------------

    public function update() {
        if (isset($_POST["txtApe_codigo"])) {
            $Ape_nombre = isset($_POST['txtApe_nombre']) ? $_POST['txtApe_nombre'] : "";
            $Ape_codigo = isset($_POST['txtApe_codigo']) ? $_POST['txtApe_codigo'] : "";
            $Ape_tipo = isset($_POST['txtApe_tipo']) ? $_POST['txtApe_tipo'] : "";
            $Ape_fecha_creacion = isset($_POST['txtApe_fecha_creacion']) ? $_POST['txtApe_fecha_creacion'] : "";
            $Ape_Foto = isset($_POST['txtApe_Foto']) ? $_POST['txtApe_Foto'] : "";
            $Ape_Descripcion = isset($_POST['txtApe_Descripcion']) ? $_POST['txtApe_Descripcion'] : "";
            // Crear Objeto Paciente con los datos del formulario
            $agricola_pecuario_obj = new Agricola($Ape_codigo, $Ape_nombre, $Ape_tipo, $Ape_fecha_creacion, $Ape_Foto, $Ape_Descripcion);
            // Se llama al metodo que inserta en la base de datos.
            // Se envía por parámetro el objeto de la clase paciente
            $agricola_pecuario_obj->edit();
        }
        header("Location:index.php?controller=Agricola&action=index");
    }

}
