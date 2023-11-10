<?php

class Ciudad extends BaseModel {
    private $ciu_codigo;
    private $ciu_nombre;
    private $ciu_estado;
   
   
    

    public function __construct($ciu_cod=null, $ciu_nom=null, $ciu_est=null){
        $this->table = "ciudad"; // tabla asociada en la base de datos
        $this->ciu_codigo = $ciu_cod;
        $this->ciu_nombre = $ciu_nom;
        $this->ciu_estado = $ciu_est;
        
        
        parent::__construct();


        
    }

    /**
     * Get the value of ciu_codigo
     */ 
    public function getCiu_codigo()
    {
        return $this->ciu_codigo;
    }

    /**
     * Set the value of ciu_codigo
     *
     * @return  self
     */ 
    public function setCiu_codigo($ciu_codigo)
    {
        $this->ciu_codigo = $ciu_codigo;

        return $this;
    }

    /**
     * Get the value of ciu_nombre
     */ 
    public function getCiu_nombre()
    {
        return $this->ciu_nombre;
    }

    /**
     * Set the value of ciu_nombre
     *
     * @return  self
     */ 
    public function setCiu_nombre($ciu_nombre)
    {
        $this->ciu_nombre = $ciu_nombre;

        return $this;
    }

    /**
     * Get the value of ciu_estado
     */ 
    public function getCiu_estado()
    {
        return $this->ciu_estado;
    }

    /**
     * Set the value of ciu_estado
     *
     * @return  self
     */ 
    public function setCiu_estado($ciu_estado)
    {
        $this->ciu_estado = $ciu_estado;

        return $this;
    }

    public function save()
    {
        // Preparar la consulta para insertar un producto en la BD
        $sql = $this->dbConnection->prepare("INSERT INTO ciudad (ciu_codigo,ciu_nombre,ciu_estado) VALUES (?, ?, ?)");

        $ciu_codigo = $this->getCiu_codigo();
        $ciu_nombre = $this->getCiu_nombre();
        $ciu_estado = $this->getCiu_estado();
       
       
        $sql->bindParam(1, $ciu_codigo);
        $sql->bindParam(2, $ciu_nombre);
        $sql->bindParam(3, $ciu_estado);
        
       
        // Excecute
        $sql->execute();

    }
    public function selectedItem()
    {
         try {
        // FETCH_OBJ
        $sql = $this->dbConnection->prepare("SELECT * FROM ciudad where ciu_codigo = ".$this->ciu_codigo);
        
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

    public function edit()
    {
        // Preparar la consulta para editar un producto en la BD
        $sql = $this->dbConnection->prepare("UPDATE ciudad SET ciu_nombre=?,ciu_estado=? WHERE ciu_codigo=?");
       
        
       
        $ciu_nombre = $this->getCiu_nombre();
        $ciu_estado = $this->getCiu_estado();
        $ciu_codigo = $this->getCiu_codigo();
       
        
        $sql->bindParam(1, $ciu_nombre);
        $sql->bindParam(2, $ciu_estado);
        $sql->bindParam(3, $ciu_codigo);

        // Excecute
        $sql->execute();
     
       

    }
    public function delete()
    {
        // Preparar la consulta para insertar un producto en la BD
        $sql = $this->dbConnection->prepare("DELETE from ciudad WHERE ciu_codigo=?");
        $ciu_codigo = $this->getCiu_codigo();
        $sql->bindParam(1, $ciu_codigo);
        // Excecute
        $sql->execute(); 
    }



}