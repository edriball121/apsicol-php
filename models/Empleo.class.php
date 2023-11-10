
<?php

class Empleo extends BaseModel {

    private $Emp_codigo;
    private $Emp_Nombre;
    private $Emp_Termnos_y_condiciones;
    private $Emp_fecha_creacion;
    private $Emp_Descripcion;

    public function __construct($Emp_cod = null, $Emp_Nom = null, $Emp_Ter_con = null, $Emp_fec_crea = null, $Emp_Descrip = null) {
        $this->table = "Empleo"; // tabla asociada en la base de datos
        $this->Emp_codigo = $Emp_cod;
        $this->Emp_Nombre = $Emp_Nom;
        $this->Emp_Termnos_y_condiciones = $Emp_Ter_con;
        $this->Emp_fecha_creacion = $Emp_fec_crea;
        $this->Emp_Descripcion = $Emp_Descrip;
        parent::__construct();
    }

    /**
     * Get the value of Emp_codigo
     */
    public function getEmp_codigo() {
        return $this->Emp_codigo;
    }

    /**
     * Set the value of Emp_codigo
     *
     * @return  self
     */
    public function setEmp_codigo($Emp_codigo) {
        $this->Emp_codigo = $Emp_codigo;

        return $this;
    }

    /**
     * Get the value of Empl_Nombre
     */
    public function getEmp_Nombre() {
        return $this->Emp_Nombre;
    }

    /**
     * Set the value of Empl_Nombre
     *
     * @return  self
     */
    public function setEmp_Nombre($Empl_Nombre) {
        $this->Emp_Nombre = $Empl_Nombre;

        return $this;
    }

    /**
     * Get the value of Emp_Termnos_y_condiciones
     */
    public function getEmp_Termnos_y_condiciones() {
        return $this->Emp_Termnos_y_condiciones;
    }

    /**
     * Set the value of Emp_Termnos_y_condiciones
     *
     * @return  self
     */
    public function setEmp_Termnos_y_condiciones($Emp_Termnos_y_condiciones) {
        $this->Emp_Termnos_y_condiciones = $Emp_Termnos_y_condiciones;

        return $this;
    }

    /**
     * Get the value of Emp_fecha_creacion
     */
    public function getEmp_fecha_creacion() {
        return $this->Emp_fecha_creacion;
    }

    /**
     * Set the value of Emp_fecha_creacion
     *
     * @return  self
     */
    public function setEmp_fecha_creacion($Emp_fecha_creacion) {
        $this->Emp_fecha_creacion = $Emp_fecha_creacion;

        return $this;
    }

    /**
     * Get the value of Emp_Descripcion
     */
    public function getEmp_Descripcion() {
        return $this->Emp_Descripcion;
    }

    /**
     * Set the value of Emp_Descripcion
     *
     * @return  self
     */
    public function setEmp_Descripcion($Emp_Descripcion) {
        $this->Emp_Descripcion = $Emp_Descripcion;

        return $this;
    }

    public function save() {
        // Preparar la consulta para insertar un empleo en la BD
        $sql = $this->dbConnection->prepare("INSERT INTO empleo (Emp_Nombre, Emp_Termnos_y_condiciones, Emp_fecha_creacion, Emp_Descripcion) VALUES ( ?, ?, NOW(), ?)");

       // $Emp_Codigo = $this->getEmp_codigo();
        $Emp_Nombre = $this->getEmp_Nombre();
        $Emp_Termnos_y_condiciones = $this->getEmp_Termnos_y_condiciones();
        
        $Emp_Descripcion = $this->getEmp_Descripcion();

      //  $sql->bindParam(1, $Emp_Codigo);
        $sql->bindParam(1, $Emp_Nombre);
        $sql->bindParam(2, $Emp_Termnos_y_condiciones);
        
        $sql->bindParam(3, $Emp_Descripcion);
        // Excecute
        $sql->execute();
    }

    public function edit() {
        // Preparar la consulta para insertar empleo en la BD
        $sql = $this->dbConnection->prepare("UPDATE  empleo SET Emp_Nombre=?, Emp_Termnos_y_condiciones=?,Emp_fecha_creacion=NOW(), Emp_Descripcion=? WHERE  Emp_codigo=?");

        $Emp_Nombre = $this->getEmp_Nombre();
        $Emp_Termnos_y_condiciones = $this->getEmp_Termnos_y_condiciones();
        $Emp_Descripcion = $this->getEmp_Descripcion();
        $Emp_codigo = $this->getEmp_codigo();
        
        $sql->bindParam(1, $Emp_Nombre);
        $sql->bindParam(2, $Emp_Termnos_y_condiciones);
        $sql->bindParam(3, $Emp_Descripcion);
        $sql->bindParam(4, $Emp_codigo);
        // Excecute
        $sql->execute();
    }

    public function delete() {
        // Preparar la consulta para insertar un empleo en la BD
        $sql = $this->dbConnection->prepare("DELETE from empleo WHERE Emp_codigo=?");

        $Emp_codigo = $this->getEmp_codigo();

        $sql->bindParam(1, $Emp_codigo);
        // Excecute
        $sql->execute();
    }

    public function getItem() {
        try {
            // FETCH_OBJ
            $sql = $this->dbConnection->prepare("SELECT * FROM empleo where Emp_codigo = " . $this->Emp_codigo);

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
