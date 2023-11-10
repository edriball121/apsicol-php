<?php

class Consulta extends BaseModel {

    private $con_radicado;
    private $con_nombre;
    private $con_tipo_consulta;
    private $con_descripcion;
    private $con_fecha;
    private $con_estado;
    private $con_calificacion;
    private $con_fecha_finalizacion;
    private $FK_con_gra_cedula;

    public function __construct($con_rad = null, $con_nom = null, $con_tipo = null, $con_descrip = null, $con_fec = null, $con_esta = null, $con_calif = null, $con_fecha_fin = null, $FK_con_gra_ced = null) {
        parent::__construct();
        $this->table = "consulta"; // tabla asociada en la base de datos
        $this->con_radicado = $con_rad;
        $this->con_nombre = $con_nom;
        $this->con_tipo_consulta = $con_tipo;
        $this->con_descripcion = $con_descrip;
        $this->con_fecha = $con_fec;
        $this->con_estado = $con_esta;
        $this->con_calificacion = $con_calif;
        $this->con_fecha_finalizacion = $con_fecha_fin;
        $this->FK_con_gra_cedula = $FK_con_gra_ced;
    }

    function getCon_radicado() {
        return $this->con_radicado;
    }

    function getCon_nombre() {
        return $this->con_nombre;
    }

    function getCon_tipo_consulta() {
        return $this->con_tipo_consulta;
    }

    function getCon_descripcion() {
        return $this->con_descripcion;
    }

    function getCon_fecha() {
        return $this->con_fecha;
    }

    function getCon_estado() {
        return $this->con_estado;
    }

    function getCon_calificacion() {
        return $this->con_calificacion;
    }

    function getCon_fecha_finalizacion() {
        return $this->con_fecha_finalizacion;
    }

    function getFK_con_gra_cedula() {
        return $this->FK_con_gra_cedula;
    }

    function setCon_radicado($con_radicado) {
        $this->con_radicado = $con_radicado;
    }

    function setCon_nombre($con_nombre) {
        $this->con_nombre = $con_nombre;
    }

    function setCon_tipo_consulta($con_tipo_consulta) {
        $this->con_tipo_consulta = $con_tipo_consulta;
    }

    function setCon_descripcion($con_descripcion) {
        $this->con_descripcion = $con_descripcion;
    }

    function setCon_fecha($con_fecha) {
        $this->con_fecha = $con_fecha;
    }

    function setCon_estado($con_estado) {
        $this->con_estado = $con_estado;
    }

    function setCon_calificacion($con_calificacion) {
        $this->con_calificacion = $con_calificacion;
    }

    function setCon_fecha_finalizacion($con_fecha_finalizacion) {
        $this->con_fecha_finalizacion = $con_fecha_finalizacion;
    }

    function setFK_con_gra_cedula($FK_con_gra_cedula) {
        $this->FK_con_gra_cedula = $FK_con_gra_cedula;
    }

    public function save() {
        // Preparar la consulta para insertar un consultor en la BD
        $sql = $this->dbConnection->prepare("INSERT INTO consulta (con_radicado, con_nombre, con_tipo_consulta, con_descripcion, con_fecha, con_estado, con_calificacion, con_fecha_finalizacion, FK_con_gra_cedula) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $con_radicado = $this->getCon_radicado();
        $con_nombre = $this->getCon_nombre();
        $con_tipo_consulta = $this->getCon_tipo_consulta();
        $con_descripcion = $this->getCon_descripcion();
        $con_fecha = $this->getCon_fecha();
        $con_estado = $this->getCon_estado();
        $con_calificacion = $this->getCon_calificacion();
        $con_fecha_finalizacion = $this->getCon_fecha_finalizacion();
        $FK_con_gra_cedula = $this->getFK_con_gra_cedula();


        $sql->bindParam(1, $con_radicado);
        $sql->bindParam(2, $con_nombre);
        $sql->bindParam(3, $con_tipo_consulta);
        $sql->bindParam(4, $con_descripcion);
        $sql->bindParam(5, $con_fecha);
        $sql->bindParam(6, $con_estado);
        $sql->bindParam(7, $con_calificacion);
        $sql->bindParam(8, $con_fecha_finalizacion);
        $sql->bindParam(9, $FK_con_gra_cedula);
        // Excecute
        $sql->execute();
    }

    public function edit() { {
            // Preparar la consulta para insertar un paciente en la BD
            $sql = $this->dbConnection->prepare("UPDATE consulta SET con_nombre=?, con_tipo_consulta=?, con_descripcion=?, con_fecha=?, con_estado=?, con_calificacion=?, con_fecha_finalizacion=?, FK_con_gra_cedula=? WHERE con_radicado=?");

            $con_radicado = $this->getCon_radicado();
            $con_nombre = $this->getCon_nombre();
            $con_tipo_consulta = $this->getCon_tipo_consulta();
            $con_descripcion = $this->getCon_descripcion();
            $con_fecha = $this->getCon_fecha();
            $con_estado = $this->getCon_estado();
            $con_calificacion = $this->getCon_calificacion();
            $con_fecha_finalizacion = $this->getCon_fecha_finalizacion();
            $FK_con_gra_cedula = $this->getFK_con_gra_cedula();

            $sql->bindParam(1, $con_nombre);
            $sql->bindParam(2, $con_tipo_consulta);
            $sql->bindParam(3, $con_descripcion);
            $sql->bindParam(4, $con_fecha);
            $sql->bindParam(5, $con_estado);
            $sql->bindParam(6, $con_calificacion);
            $sql->bindParam(7, $con_fecha_finalizacion);
            $sql->bindParam(8, $FK_con_gra_cedula);
            $sql->bindParam(9, $con_radicado);
            // Excecute
            $sql->execute();

            // Excecute
            $sql->execute();
        }
    }

    public function delete() {
        // Preparar la consulta para insertar un paciente en la BD
        $sql = $this->dbConnection->prepare("DELETE from Consulta WHERE con_radicado=?");

        $con_radicado = $this->getCon_radicado();

        $sql->bindParam(1, $con_radicado);
        // Excecute
        $sql->execute();
    }

    public function getItem() {
        try {
            // FETCH_OBJ
            $sql = $this->dbConnection->prepare("SELECT * FROM consulta where con_radicado = " . $this->con_radicado);

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
