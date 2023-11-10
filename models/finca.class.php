
<?php

class finca extends BaseModel {
    private $Fin_codigo;
    private $Fin_nombre;
    private $Fin_tamanno;
    private $Fin_direccion;
    private $Fin_foto;
    private $Fin_productos;
    private $Fin_Telefono;
    private $Fin_Descripcion;


    public function __construct($Fin_codigo=null, $Fin_nombre=null, $Fin_tamanno=null, $Fin_direccion=null, $Fin_foto=null,$Fin_productos=null, $Fin_Telefono=null, $Fin_Descripcion=null){
        $this->table = "finca"; // tabla asociada en la base de datos
        $this->Fin_codigo= $Fin_codigo;
        $this->Fin_nombre = $Fin_nombre;
        $this->Fin_tamanno = $Fin_tamanno;
        $this->Fin_direccion = $Fin_direccion;
        $this->Fin_foto = $Fin_foto;
        $this->Fin_productos = $Fin_productos;
        $this->Fin_Telefono = $Fin_Telefono;
        $this->Fin_Descripcion = $Fin_Descripcion;
        parent::__construct();
    }


    /**
     * Get the value of Fin_codigo
     */
    public function getFin_codigo()
    {
        return $this->Fin_codigo;
    }

    /**
     * Set the value of Gra_cedula
     *
     * @return  self
     */
    public function setFin_codigo($Fin_codigo)
    {
        $this->Fin_codigo = $Fin_codigo;

        return $this;
    }

    /**
     * Get the value of Fin_nombre
     */
    public function getFin_nombre()
    {
        return $this->Fin_nombre;
    }

    /**
     * Set the value of Fin_nombre
     *
     * @return  self
     */
    public function setFin_nombre($Fin_nombre)
    {
        $this->Fin_nombre = $Fin_nombre;

        return $this;
    }

    /**
     * Get the value of Fin_tamanno
     */
    public function getFin_tamanno()
    {
        return $this->Fin_tamanno;
    }

    /**
     * Set the value of Fin_tamanno
     *
     * @return  self
     */
    public function setFin_tamanno($Fin_tamanno)
    {
        $this->Fin_tamanno = $Fin_tamanno;

        return $this;
    }

    /**
     * Get the value of Fin_direccion
     */
    public function getFin_direccion()
    {
        return $this->Fin_direccion;
    }

    /**
     * Set the value of Fin_direccion
     *
     * @return  self
     */
    public function setFin_direccion($Fin_direccion)
    {
        $this->Fin_direccion = $Fin_direccion;

        return $this;
    }

    /**
     * Get the value of Fin_foto
     */
    public function getFin_foto()
    {
        return $this->Fin_foto;
    }

    /**
     * Set the value of Fin_foto
     *
     * @return  self
     */
    public function setFin_foto($Fin_foto)
    {
        $this->Fin_foto = $Fin_foto;

        return $this;
    }

    /**
     * Get the value of Fin_productos
     */
    public function getFin_productos()
    {
        return $this->Fin_productos;
    }

    /**
     * Set the value of Fin_productos
     *
     * @return  self
     */
    public function setFin_productos($Fin_productos)
    {
        $this->Fin_productos = $Fin_productos;

        return $this;
    }

    /**
     * Get the value of Fin_Telefono
     */
    public function getFin_Telefono()
    {
        return $this->Fin_Telefono;
    }

    /**
     * Set the value of Fin_Telefono
     *
     * @return  self
     */
    public function setFin_Telefono($Fin_Telefono)
    {
        $this->Fin_Telefono = $Fin_Telefono;

        return $this;
    }

    /**
     * Get the value of Fin_Descripcion
     */
    public function getFin_Descripcion()
    {
        return $this->Fin_Descripcion;
    }

    /**
     * Set the value of Fin_Descripcion
     *
     * @return  self
     */
    public function setFin_Descripcion($Fin_Descripcion)
    {
        $this->Fin_Descripcion = $Fin_Descripcion;

        return $this;
    }




    public function save()
    {
        // Preparar la consulta para insertar un finca en la BD 
    $sql = $this->dbConnection->prepare("INSERT INTO finca (Fin_codigo, Fin_nombre, Fin_tamanno, Fin_direccion, Fin_foto, Fin_productos, Fin_Telefono, Fin_Descripcion) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

        $Fin_codigo= $this-> getFin_codigo();
        $Fin_nombre= $this-> getFin_nombre();
        $Fin_tamanno= $this-> getFin_tamanno();
        $Fin_direccion= $this-> getFin_direccion();
        $Fin_foto= $this-> getFin_foto();
        $Fin_productos= $this->getFin_productos();
        $Fin_Telefono= $this-> getFin_Telefono();
        $Fin_Descripcion= $this-> getFin_Descripcion();

        $sql->bindParam(1, $Fin_codigo);
        $sql->bindParam(2, $Fin_nombre);
        $sql->bindParam(3, $Fin_tamanno);
        $sql->bindParam(4, $Fin_direccion);
        $sql->bindParam(5, $Fin_foto);
        $sql->bindParam(6, $Fin_productos);
        $sql->bindParam(7, $Fin_Telefono);
        $sql->bindParam(8, $Fin_Descripcion);
        // Excecute
        $sql->execute();

    }
    public function edit()
    {
        // Preparar la consulta para insertar finca en la BD
        $sql = $this->dbConnection->prepare("UPDATE  finca SET Fin_nombre=?, Fin_tamanno=?,Fin_direccion=?, Fin_foto=?, Fin_productos=?, Fin_Telefono=?, Fin_Descripcion=? WHERE  Fin_codigo=?");
       
        $Fin_codigo= $this-> getFin_codigo();
        $Fin_nombre= $this-> getFin_nombre();
        $Fin_tamanno= $this-> getFin_tamanno();
        $Fin_direccion= $this-> getFin_direccion();
        $Fin_foto= $this-> getFin_foto();
        $Fin_productos= $this->getFin_productos();
        $Fin_Telefono= $this-> getFin_Telefono();
        $Fin_Descripcion= $this-> getFin_Descripcion();
        

     
    
        $sql->bindParam(1, $Fin_nombre);
        $sql->bindParam(2, $Fin_tamanno);
        $sql->bindParam(3, $Fin_direccion);
        $sql->bindParam(4, $Fin_foto);
        $sql->bindParam(5, $Fin_productos);
        $sql->bindParam(6, $Fin_Telefono);
        $sql->bindParam(7, $Fin_Descripcion);
        $sql->bindParam(8, $Fin_codigo);
        // Excecute
        $sql->execute();

    }
    public function delete()
    {
        // Preparar la consulta para insertar un finca en la BD
        $sql = $this->dbConnection->prepare("DELETE from finca WHERE Fin_codigo=?");
       
        $Fin_codigo = $this->getFin_codigo();

        $sql->bindParam(1,$Fin_codigo);
        // Excecute
        $sql->execute(); 

    }

    public function getItem()
    {
        try {
            // FETCH_OBJ
            $sql = $this->dbConnection->prepare("SELECT * FROM finca where Fin_codigo = ".$this->Fin_codigo);
            
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

