<?php

class Noticias extends BaseModel {

    private $not_codigo;
    private $not_nombre;
    private $not_descripcion;
    private $not_foto;
    private $not_fecha_creacion;
    private $not_url;
    private $not_subtitulo;

    public function __construct($not_cod = null, $not_nom = null, $not_des = null, $not_fot = null, $not_fec = null, $not_url = null, $not_sub=null) {
        $this->table = "noticias"; // tabla asociada en la base de datos
        $this->not_codigo = $not_cod;
        $this->not_nombre = $not_nom;
        $this->not_descripcion = $not_des;
        $this->not_foto = $not_fot;
        $this->not_fecha_creacion = $not_fec;
        $this->not_url = $not_url;
        $this->not_subtitulo = $not_sub;

        parent::__construct();
    }
    function getNot_subtitulo() {
        return $this->not_subtitulo;
    }

    function setNot_subtitulo($not_subtitulo) {
        $this->not_subtitulo = $not_subtitulo;
    }

        /**
     * Get the value of not_codigo
     */
    public function getNot_codigo() {
        return $this->not_codigo;
    }

    /**
     * Set the value of not_codigo
     *
     * @return  self
     */
    public function setNot_codigo($not_codigo) {
        $this->not_codigo = $not_codigo;

        return $this;
    }

    /**
     * Get the value of not_nombre
     */
    public function getNot_nombre() {
        return $this->not_nombre;
    }

    /**
     * Set the value of not_nombre
     *
     * @return  self
     */
    public function setNot_nombre($not_nombre) {
        $this->not_nombre = $not_nombre;

        return $this;
    }

    /**
     * Get the value of not_descripcion
     */
    public function getNot_descripcion() {
        return $this->not_descripcion;
    }

    /**
     * Set the value of not_descripcion
     *
     * @return  self
     */
    public function setNot_descripcion($not_descripcion) {
        $this->not_descripcion = $not_descripcion;

        return $this;
    }

    /**
     * Get the value of not_foto
     */
    public function getNot_foto() {
        return $this->not_foto;
    }

    /**
     * Set the value of not_foto
     *
     * @return  self
     */
    public function setNot_foto($not_foto) {
        $this->not_foto = $not_foto;

        return $this;
    }

    /**
     * Get the value of not_fecha_creacion
     */
    public function getNot_fecha_creacion() {
        return $this->not_fecha_creacion;
    }

    /**
     * Set the value of not_fecha_creacion
     *
     * @return  self
     */
    public function setNot_fecha_creacion($not_fecha_creacion) {
        $this->not_fecha_creacion = $not_fecha_creacion;

        return $this;
    }

    /**
     * Get the value of not_url
     */
    public function getNot_url() {
        return $this->not_url;
    }

    /**
     * Set the value of not_url
     *
     * @return  self
     */
    public function setNot_url($not_url) {
        $this->not_url = $not_url;

        return $this;
    }

    public function save() {
        // Preparar la consulta para insertar un producto en la BD
        $sql = $this->dbConnection->prepare("INSERT INTO noticias (not_codigo, not_nombre, not_descripcion, not_foto, not_fecha_creacion, not_url, not_subtitulo) VALUES (?, ?, ?, ?, NOW(), ?, ?)");

        $not_codigo = $this->getNot_codigo();
        $not_nombre = $this->getNot_nombre();
        $not_descripcion = $this->getNot_descripcion();
        $not_foto = $this->getNot_foto();
        
        $not_url = $this->getNot_url();
        $not_subtitulo = $this->getNot_subtitulo();

        $sql->bindParam(1, $not_codigo);
        $sql->bindParam(2, $not_nombre);
        $sql->bindParam(3, $not_descripcion);
        $sql->bindParam(4, $not_foto);
        
        $sql->bindParam(5, $not_url);
        $sql->bindParam(6, $not_subtitulo);

        // Excecute
        $sql->execute();
    }

    public function selectedItem() {
        try {
            // FETCH_OBJ
            $sql = $this->dbConnection->prepare("SELECT * FROM noticias where not_codigo = " . $this->not_codigo);

            // Ejecutamos
            $sql->execute();
            $resultSet = null;
            // Ahora vamos a indicar el fetch mode cuando llamamos a fetch:
            if ($row = $sql->fetch(PDO::FETCH_OBJ)) {
                $resultSet = $row;
            }
            return $resultSet;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            die();
        }
    }

    public function edit() {
        // Preparar la consulta para editar un producto en la BD
        $sql = $this->dbConnection->prepare("UPDATE noticias SET not_nombre=?,not_descripcion=?,not_foto=?,not_fecha_creacion=NOW(),not_url=?,not_subtitulo=? WHERE not_codigo=?");


        $not_nombre = $this->getNot_nombre();
        $not_descripcion = $this->getNot_descripcion();
        $not_foto = $this->getNot_foto();
        
        $not_url = $this->getNot_url();
        $not_codigo = $this->getNot_codigo();
        $not_subtitulo = $this->getNot_subtitulo();


        $sql->bindParam(1, $not_nombre);
        $sql->bindParam(2, $not_descripcion);
        $sql->bindParam(3, $not_foto);
        
        $sql->bindParam(4, $not_url);
        $sql->bindParam(5, $not_subtitulo);
        $sql->bindParam(6, $not_codigo);

        // Excecute
        $sql->execute();
    }

    public function delete() {
        // Preparar la consulta para insertar un producto en la BD
        $sql = $this->dbConnection->prepare("DELETE from noticias WHERE not_codigo=?");
        $not_codigo = $this->getNot_codigo();
        $sql->bindParam(1, $not_codigo);
        // Excecute
        $sql->execute();
    }

    public function getNoticiasInicio() {
        try {
            // FETCH_OBJ
            $sql = $this->dbConnection->prepare("SELECT * FROM noticias LIMIT 3");

            // Ejecutamos
            $sql->execute();
            $resultSet = null;
            // Ahora vamos a indicar el fetch mode cuando llamamos a fetch:
            while ($row = $sql->fetch(PDO::FETCH_OBJ)) {
                $resultSet[] = $row;
            }
            return $resultSet;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            die();
        }
    }

}
