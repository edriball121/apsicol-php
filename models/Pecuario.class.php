
<?php

class Pecuario extends BaseModel {

    private $Ape_codigo;
    private $Ape_nombre;
    private $Ape_tipo;
    private $Ape_fecha_creacion;
    private $Ape_Foto;
    private $Ape_Descripcion;

    public function __construct($Ape_codigo = null, $Ape_nombre = null, $Ape_tipo = null, $Ape_fecha_creacion = null, $Ape_Descripcion = null, $Ape_Foto = null) {
        $this->table = "pecuario"; // tabla asociada en la base de datos
        $this->Ape_codigo = $Ape_codigo;
        $this->Ape_nombre = $Ape_nombre;
        $this->Ape_tipo = $Ape_tipo;
        $this->Ape_fecha_creacion = $Ape_fecha_creacion;
        $this->Ape_Descripcion = $Ape_Descripcion;
        $this->Ape_Foto = $Ape_Foto;

        parent::__construct();
    }

    /**
     * Get the value of ape_codigo
     */
    public function getApe_codigo() {
        return $this->Ape_codigo;
    }

    /**
     * Set the value of Ape_codigo
     *
     * @return  self
     */
    public function setape_codigo($Ape_codigo) {
        $this->Ape_codigo = $Ape_codigo;

        return $this;
    }

    /**
     * Get the value of Ape_nombre
     */
    public function getApe_nombre() {
        return $this->Ape_nombre;
    }

    /**
     * Set the value of Ape_nombre
     *
     * @return  self
     */
    public function setApe_nombre($Ape_nombre) {
        $this->Ape_nombre = $Ape_nombre;

        return $this;
    }

    /**
     * Get the value of Ape_tipo
     */
    public function getApe_tipo() {
        return $this->Ape_tipo;
    }

    /**
     * Set the value of Ape_tipo
     *
     * @return  self
     */
    public function setApe_tipo($Ape_tipo) {
        $this->Ape_tipo = $Ape_tipo;

        return $this;
    }

    /**
     * Get the value of Ape_fecha_creacion
     */
    public function getApe_fecha_creacion() {
        return $this->Ape_fecha_creacion;
    }

    /**
     * Set the value of Ape_fecha_creacion
     *
     * @return  self
     */
    public function setApe_fecha_creacion($Ape_fecha_creacion) {
        $this->Ape_fecha_creacion = $Ape_fecha_creacion;

        return $this;
    }

    /**
     * Get the value of Ape_Descripcion
     */
    public function getApe_Descripcion() {
        return $this->Ape_Descripcion;
    }

    /**
     * Set the value of Ape_Descripcion
     *
     * @return  self
     */
    public function setApe_Descripcion($Ape_Descripcion) {
        $this->Ape_Descripcion = $Ape_Descripcion;

        return $this;
    }

    /**
     * Get the value of Ape_Foto
     */
    public function getApe_Foto() {
        return $this->Ape_Foto;
    }

    /**
     * Set the value of Emp_Descripcion
     *
     * @return  self
     */
    public function setApe_Foto($Ape_Foto) {
        $this->Ape_Foto = $Ape_Foto;

        return $this;
    }

    public function save() {
        // Preparar la consulta para insertar un agricola_pecuario en la BD
        $sql = $this->dbConnection->prepare("INSERT INTO pecuario (Ape_codigo, Ape_nombre, Ape_tipo, Ape_fecha_creacion, Ape_Descripcion ,Ape_Foto) VALUES (?, ?, ?, NOW(), ?, ?)");
        $Ape_codigo = $this->getApe_codigo();
        $Ape_nombre = $this->getApe_nombre();
        $Ape_tipo = $this->getApe_tipo();
        
        $Ape_Descripcion = $this->getApe_Descripcion();
        $Ape_Foto = $this->getApe_Foto();
        


        $sql->bindParam(1, $Ape_codigo);
        $sql->bindParam(2, $Ape_nombre);
        $sql->bindParam(3, $Ape_tipo);
        
        $sql->bindParam(4, $Ape_Descripcion);
        $sql->bindParam(5, $Ape_Foto);
        

        // Excecute
        $sql->execute();
    }

    public function edit() {
        // Preparar la consulta para insertar agricola_pecuario en la BD
        $sql = $this->dbConnection->prepare("UPDATE  pecuario SET Ape_nombre=?, Ape_tipo=?,Ape_fecha_creacion=NOW(), Ape_Descripcion=?,Ape_Foto=?  WHERE  Ape_codigo=?");

        $Ape_nombre = $this->getApe_nombre();
        $Ape_tipo = $this->getApe_tipo();
       
        $Ape_Foto = $this->getApe_Foto();
        $Ape_Descripcion = $this->getApe_Descripcion();
        $Ape_codigo = $this->getApe_codigo();




        $sql->bindParam(1, $Ape_nombre);
        $sql->bindParam(2, $Ape_tipo);
        
        $sql->bindParam(3, $Ape_Foto);
        $sql->bindParam(4, $Ape_Descripcion);
        $sql->bindParam(5, $Ape_codigo);
        // Excecute
        $sql->execute();
    }

    public function delete() {
        // Preparar la consulta para insertar un agricola_pecuario en la BD
        $sql = $this->dbConnection->prepare("DELETE from pecuario WHERE Ape_codigo=?");

        $Ape_codigo = $this->getApe_codigo();

        $sql->bindParam(1, $Ape_codigo);
        // Excecute
        $sql->execute();
    }

    public function getItem() {
        try {
            // FETCH_OBJ
            $sql = $this->dbConnection->prepare("SELECT * FROM pecuario where Ape_codigo = " . $this->Ape_codigo);

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
