<?php

class Empresa extends BaseModel {

    private $emp_codigo;
    private $emp_nombre;
    private $emp_descripcion;
    private $emp_telefono;
    private $emp_foto;

    public function __construct($emp_codigo = null, $emp_nombre = null, $emp_descripcion = null, $emp_telefono = null, $emp_foto = null) {
        parent::__construct();
        $this->table = "empresa"; // tabla asociada en la base de datos
        $this->emp_codigo = $emp_codigo;
        $this->emp_nombre = $emp_nombre;
        $this->emp_descripcion = $emp_descripcion;
        $this->emp_telefono = $emp_telefono;
        $this->emp_foto = $emp_foto;
    }

    function getEmp_codigo() {
        return $this->emp_codigo;
    }

    function getEmp_nombre() {
        return $this->emp_nombre;
    }

    function getEmp_descripcion() {
        return $this->emp_descripcion;
    }

    function getEmp_telefono() {
        return $this->emp_telefono;
    }

    function getEmp_foto() {
        return $this->emp_foto;
    }

    function setEmp_codigo($emp_codigo) {
        $this->emp_codigo = $emp_codigo;
    }

    function setEmp_nombre($emp_nombre) {
        $this->emp_nombre = $emp_nombre;
    }

    function setEmp_descripcion($emp_descripcion) {
        $this->emp_descripcion = $emp_descripcion;
    }

    function setEmp_telefono($emp_telefono) {
        $this->emp_telefono = $emp_telefono;
    }

    function setEmp_foto($emp_foto) {
        $this->emp_foto = $emp_foto;
    }

    public function save() {
        // Preparar la consulta para insertar un consultor en la BD
        $sql = $this->dbConnection->prepare("INSERT INTO empresa (emp_codigo, emp_nombre, emp_descripcion, emp_telefono, emp_foto) VALUES (?, ?, ?, ?, ?)");

        $emp_codigo = $this->getEmp_codigo();
        $emp_nombre = $this->getEmp_nombre();
        $emp_descripcion = $this->getEmp_descripcion();
        $emp_telefono = $this->getEmp_telefono();
        $emp_foto = $this->getEmp_foto();


        $sql->bindParam(1, $emp_codigo);
        $sql->bindParam(2, $emp_nombre);
        $sql->bindParam(3, $emp_descripcion);
        $sql->bindParam(4, $emp_telefono);
        $sql->bindParam(5, $emp_foto);
        // Excecute
        $sql->execute();
    }

    public function edit() { {
            // Preparar la consulta para insertar un paciente en la BD
            $sql = $this->dbConnection->prepare("UPDATE empresa SET emp_nombre=?, emp_descripcion=?, emp_telefono=?, emp_foto=? WHERE emp_codigo=?");

            $emp_codigo = $this->getEmp_codigo();
            $emp_nombre = $this->getEmp_nombre();
            $emp_descripcion = $this->getEmp_descripcion();
            $emp_telefono = $this->getEmp_telefono();
            $emp_foto = $this->getEmp_foto();

            $sql->bindParam(1, $emp_nombre);
            $sql->bindParam(2, $emp_descripcion);
            $sql->bindParam(3, $emp_telefono);
            $sql->bindParam(4, $emp_foto);
            $sql->bindParam(5, $emp_codigo);

            // Excecute
            $sql->execute();
        }
    }

    public function delete() {
        // Preparar la consulta para insertar un paciente en la BD
        $sql = $this->dbConnection->prepare("DELETE from empresa WHERE emp_codigo=?");

        $emp_codigo = $this->getEmp_codigo();

        $sql->bindParam(1, $emp_codigo);
        // Excecute
        $sql->execute();
    }

    public function getItem() {
        try {
            // FETCH_OBJ
            $sql = $this->dbConnection->prepare("SELECT * FROM empresa WHERE emp_codigo = " . $this->emp_codigo);
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
