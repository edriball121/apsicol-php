<?php

class Consultor extends BaseModel {

    private $con_cedula;
    private $con_nombre;
    private $con_apellido;
    private $con_password;
    private $con_telefono;
    private $con_email;
    private $con_direccion;
    private $con_fecha_nacimiento;
    private $con_profesion;
    private $con_annos_experiencia;

    public function __construct($con_cedula = null, $con_nombre = null, $con_apellido = null, $con_password = null, $con_telefono = null, $con_email = null, $con_direccion = null, $con_fecha_nacimiento = null, $con_profesion = null, $con_annos_experiencia = null) {
        parent::__construct();
        $this->table = "consultor"; // tabla asociada en la base de datos
        $this->con_cedula = $con_cedula;
        $this->con_nombre = $con_nombre;
        $this->con_apellido = $con_apellido;
        $this->con_password = $con_password;
        $this->con_telefono = $con_telefono;
        $this->con_email = $con_email;
        $this->con_direccion = $con_direccion;
        $this->con_fecha_nacimiento = $con_fecha_nacimiento;
        $this->con_profesion = $con_profesion;
        $this->con_annos_experiencia = $con_annos_experiencia;
    }

    function getCon_cedula() {
        return $this->con_cedula;
    }

    function getCon_nombre() {
        return $this->con_nombre;
    }

    function getCon_apellido() {
        return $this->con_apellido;
    }

    function getCon_password() {
        return $this->con_password;
    }

    function getCon_telefono() {
        return $this->con_telefono;
    }

    function getCon_email() {
        return $this->con_email;
    }

    function getCon_direccion() {
        return $this->con_direccion;
    }

    function getCon_fecha_nacimiento() {
        return $this->con_fecha_nacimiento;
    }

    function getCon_profesion() {
        return $this->con_profesion;
    }

    function getCon_annos_experiencia() {
        return $this->con_annos_experiencia;
    }

    function setCon_cedula($con_cedula) {
        $this->con_cedula = $con_cedula;
    }

    function setCon_nombre($con_nombre) {
        $this->con_nombre = $con_nombre;
    }

    function setCon_apellido($con_apellido) {
        $this->con_apellido = $con_apellido;
    }

    function setCon_password($con_password) {
        $this->con_password = $con_password;
    }

    function setCon_telefono($con_telefono) {
        $this->con_telefono = $con_telefono;
    }

    function setCon_email($con_email) {
        $this->con_email = $con_email;
    }

    function setCon_direccion($con_direccion) {
        $this->con_direccion = $con_direccion;
    }

    function setCon_fecha_nacimiento($con_fecha_nacimiento) {
        $this->con_fecha_nacimiento = $con_fecha_nacimiento;
    }

    function setCon_profesion($con_profesion) {
        $this->con_profesion = $con_profesion;
    }

    function setCon_annos_experiencia($con_annos_experiencia) {
        $this->con_annos_experiencia = $con_annos_experiencia;
    }

    public function save() {
        try {
            // Preparar la consulta para insertar un consultor en la BD
            $sql = $this->dbConnection->prepare("INSERT INTO consultor (con_cedula, con_nombre, con_apellido, con_password, con_telefono, con_email, con_direccion, con_fecha_nacimiento, con_fecha_creacion, con_profesion, con_annos_experiencia) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW(), ?, ?)");

            $con_cedula = $this->getCon_cedula();
            $con_nombre = $this->getCon_nombre();
            $con_apellido = $this->getCon_apellido();
            $con_password = $this->getCon_password();
            $con_telefono = $this->getCon_telefono();
            $con_email = $this->getCon_email();
            $con_direccion = $this->getCon_direccion();
            $con_fecha_nacimiento = $this->getCon_fecha_nacimiento();
            $con_profesion = $this->getCon_profesion();
            $con_annos_experiencia = $this->getCon_annos_experiencia();

            $sql->bindParam(1, $con_cedula);
            $sql->bindParam(2, $con_nombre);
            $sql->bindParam(3, $con_apellido);
            $contra = password_hash($con_password, PASSWORD_BCRYPT); //, $option);
            $sql->bindParam(4, $contra);
            $sql->bindParam(5, $con_telefono);
            $sql->bindParam(6, $con_email);
            $sql->bindParam(7, $con_direccion);
            $sql->bindParam(8, $con_fecha_nacimiento);
            $sql->bindParam(9, $con_profesion);
            $sql->bindParam(10, $con_annos_experiencia);
            // Excecute
            $resp = $sql->execute();
            return $resp;
        } catch (PDOException $e) {

            $eCode = (int) $e->getCode();
            $message = $e->getMessage();
            $errorCode = $e->errorInfo[1];
            echo 'error' . $errorCode;
            return $errorCode;
            //die();
        }
    }

    public function edit() { {
            // Preparar la consulta para insertar un paciente en la BD
            $sql = $this->dbConnection->prepare("UPDATE consultor SET con_nombre=?, con_apellido=?, con_password=?, con_telefono=?, con_email=?, con_direccion=?, con_fecha_nacimiento=?, con_fecha_creacion=NOW(), con_profesion=?, con_annos_experiencia=? WHERE con_cedula=?");

            $con_nombre = $this->getCon_nombre();
            $con_apellido = $this->getCon_apellido();
            $con_password = $this->getCon_password();
            $con_telefono = $this->getCon_telefono();
            $con_email = $this->getCon_email();
            $con_direccion = $this->getCon_direccion();
            $con_fecha_nacimiento = $this->getCon_fecha_nacimiento();
            $con_profesion = $this->getCon_profesion();
            $con_annos_experiencia = $this->getCon_annos_experiencia();
            $con_cedula = $this->getCon_cedula();

            $sql->bindParam(1, $con_nombre);
            $sql->bindParam(2, $con_apellido);
            $sql->bindParam(3, $con_password);
            $sql->bindParam(4, $con_telefono);
            $sql->bindParam(5, $con_email);
            $sql->bindParam(6, $con_direccion);
            $sql->bindParam(7, $con_fecha_nacimiento);
            $sql->bindParam(8, $con_profesion);
            $sql->bindParam(9, $con_annos_experiencia);
            $sql->bindParam(10, $con_cedula);

            // Excecute
            $sql->execute();
        }
    }

    public function delete() {

        try {
            // Preparar la consulta para insertar un paciente en la BD
            $sql = $this->dbConnection->prepare("DELETE from consultor WHERE con_cedula=?");
            $con_cedula = $this->getCon_cedula();
            $sql->bindParam(1, $con_cedula);
            // Excecute
            $resp = $sql->execute();
            return $resp;
        } catch (PDOException $e) {

            $eCode = (int) $e->getCode();
            $message = $e->getMessage();
            $errorCode = $e->errorInfo[1];
            echo 'error' . $errorCode;
            return $errorCode;
            //die();
        }
    }

    public function getItem() {
        try {
            // FETCH_OBJ
            $sql = $this->dbConnection->prepare("SELECT * FROM consultor WHERE con_cedula = " . $this->con_cedula);
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

    public function validarLogin() {
        try {
            //FETCH_OBJ
            $sql = $this->dbConnection->prepare("SELECT * FROM consultor WHERE con_cedula = ?");
            $con_cedula = $this->getCon_cedula();
            $sql->bindParam(1, $this->con_cedula);
            //Ejecutamos
            $sql->execute();
            $resultSet = array();
            
            // Ahora vamos a indicar el fetch mod cuando llamamos a fetch:
            while ($row = $sql->fetch(PDO::FETCH_OBJ)) {
                $resultSet[] = $row;
            }
            //Si en cuentra el usuario
            if (count($resultSet) > 0) {
                //$option = ['cost' =>12];
                /* $contra = password_hash($this->adm_password, PASSWORD_BCRYPT);//, $option);
                  echo"contra> ".$contra."<b>"; */
                $hash = $resultSet[0]->con_password;

                //$contra = password_hash($this->adm_password, PASSWORD_BCRYPT);//, $option);

                if (password_verify($this->con_password, $hash)) {
                    //session_start();
                    $_SESSION['documento'] = $resultSet[0]->con_cedula;
                    $_SESSION['nombre'] = $resultSet[0]->con_nombre;
                    $_SESSION['tipo_usuario'] = "consultor";
                    $_SESSION['email'] = $resultSet[0]->con_email;
                    $_SESSION['timeout'] = time();
                    
                    return true;
                } else {
                    echo "no en tras> ";
                }
            }
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            die();
        }
    }

}
