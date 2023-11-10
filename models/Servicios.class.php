<?php

class Servicios extends BaseModel {

    private $ser_codigo;
    private $ser_nombre;
    private $ser_descripcion;
    private $ser_valor;
    private $ser_foto;
    private $FK_ser_emp_codigo;

    public function __construct($ser_codigo = null, $ser_nombre = null, $ser_descripcion = null, $ser_valor = null, $ser_foto = null, $FK_ser_emp_codigo = null) {
        parent::__construct();
        $this->table = "servicios"; // tabla asociada en la base de datos
        $this->ser_codigo = $ser_codigo;
        $this->ser_nombre = $ser_nombre;
        $this->ser_descripcion = $ser_descripcion;
        $this->ser_valor = $ser_valor;
        $this->ser_foto = $ser_foto;
        $this->FK_ser_emp_codigo = $FK_ser_emp_codigo;
    }

    function getSer_codigo() {
        return $this->ser_codigo;
    }

    function getSer_nombre() {
        return $this->ser_nombre;
    }

    function getSer_descripcion() {
        return $this->ser_descripcion;
    }

    function getSer_valor() {
        return $this->ser_valor;
    }

    function getSer_foto() {
        return $this->ser_foto;
    }

    function getFK_ser_emp_codigo() {
        return $this->FK_ser_emp_codigo;
    }

    function setSer_codigo($ser_codigo) {
        $this->ser_codigo = $ser_codigo;
    }

    function setSer_nombre($ser_nombre) {
        $this->ser_nombre = $ser_nombre;
    }

    function setSer_descripcion($ser_descripcion) {
        $this->ser_descripcion = $ser_descripcion;
    }

    function setSer_valor($ser_valor) {
        $this->ser_valor = $ser_valor;
    }

    function setSer_foto($ser_foto) {
        $this->ser_foto = $ser_foto;
    }

    function setFK_ser_emp_codigo($FK_ser_emp_codigo) {
        $this->FK_ser_emp_codigo = $FK_ser_emp_codigo;
    }

    public function save() {
        // Preparar la consulta para insertar un consultor en la BD
        $sql = $this->dbConnection->prepare("INSERT INTO servicios(ser_codigo, ser_nombre, ser_descripcion, ser_valor, ser_foto, FK_ser_emp_codigo) VALUES (?, ?, ?, ?, ?, ?)");

        $ser_codigo = $this->getSer_codigo();
        $ser_nombre = $this->getSer_nombre();
        $ser_descripcion = $this->getSer_descripcion();
        $ser_valor = $this->getSer_valor();
        $ser_foto = $this->getSer_foto();
        $FK_ser_emp_codigo = $this->getFK_ser_emp_codigo();


        $sql->bindParam(1, $ser_codigo);
        $sql->bindParam(2, $ser_nombre);
        $sql->bindParam(3, $ser_descripcion);
        $sql->bindParam(4, $ser_valor);
        $sql->bindParam(5, $ser_foto);
        $sql->bindParam(6, $FK_ser_emp_codigo);
        // Excecute
        $sql->execute();
    }

    public function edit() { {
            // Preparar la consulta para insertar un paciente en la BD
            $sql = $this->dbConnection->prepare("UPDATE servicios SET ser_nombre=?, ser_descripcion=?, ser_valor=?, ser_foto=?, FK_ser_emp_codigo=? WHERE ser_codigo=?");

            $ser_codigo = $this->getSer_codigo();
            $ser_nombre = $this->getSer_nombre();
            $ser_descripcion = $this->getSer_descripcion();
            $ser_valor = $this->getSer_valor();
            $ser_foto = $this->getSer_foto();
            $FK_ser_emp_codigo = $this->getFK_ser_emp_codigo();



            $sql->bindParam(1, $ser_nombre);
            $sql->bindParam(2, $ser_descripcion);
            $sql->bindParam(3, $ser_valor);
            $sql->bindParam(4, $ser_foto);
            $sql->bindParam(5, $FK_ser_emp_codigo);
            $sql->bindParam(6, $ser_codigo);
            // Excecute
            $sql->execute();
        }
    }

    public function delete() {
        // Preparar la consulta para insertar un paciente en la BD
        $sql = $this->dbConnection->prepare("DELETE from servicios WHERE ser_codigo=?");

        $ser_codigo = $this->getSer_codigo();

        $sql->bindParam(1, $ser_codigo);
        // Excecute
        $sql->execute();
    }

    public function getItem() {
        try {
            // FETCH_OBJ
            $sql = $this->dbConnection->prepare("SELECT * FROM servicios WHERE ser_codigo = " . $this->ser_codigo);
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
    

}
