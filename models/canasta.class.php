<?php

class Canasta extends BaseModel {
    private $cta_codigo;
    private $cta_nombre;
    private $cta_precio;
    private $cta_fecha;
    private $cta_ciudad;
   
    

    public function __construct($cta_cod=null, $cta_nom=null, $cta_pre=null, $cta_fec=null, $cta_ciu=null){
        $this->table = "canasta_familiar"; // tabla asociada en la base de datos
        $this->cta_codigo = $cta_cod;
        $this->cta_nombre = $cta_nom;
        $this->cta_precio = $cta_pre;
        $this->cta_fecha = $cta_fec;
        $this->cta_ciudad = $cta_ciu;
        
        parent::__construct();
    }

    

    /**
     * Get the value of cta_codigo
     */ 
    public function getCta_codigo()
    {
        return $this->cta_codigo;
    }

    /**
     * Set the value of cta_codigo
     *
     * @return  self
     */ 
    public function setCta_codigo($cta_codigo)
    {
        $this->cta_codigo = $cta_codigo;

        return $this;
    }

    /**
     * Get the value of cta_nombre
     */ 
    public function getCta_nombre()
    {
        return $this->cta_nombre;
    }

    /**
     * Set the value of cta_nombre
     *
     * @return  self
     */ 
    public function setCta_nombre($cta_nombre)
    {
        $this->cta_nombre = $cta_nombre;

        return $this;
    }

    /**
     * Get the value of cta_precio
     */ 
    public function getCta_precio()
    {
        return $this->cta_precio;
    }

    /**
     * Set the value of cta_precio
     *
     * @return  self
     */ 
    public function setCta_precio($cta_precio)
    {
        $this->cta_precio = $cta_precio;

        return $this;
    }

    /**
     * Get the value of cta_fecha
     */ 
    public function getCta_fecha()
    {
        return $this->cta_fecha;
    }

    /**
     * Set the value of cta_fecha
     *
     * @return  self
     */ 
    public function setCta_fecha($cta_fecha)
    {
        $this->cta_fecha = $cta_fecha;

        return $this;
    }

    /**
     * Get the value of cta_ciudad
     */ 
    public function getCta_ciudad()
    {
        return $this->cta_ciudad;
    }

    /**
     * Set the value of cta_ciudad
     *
     * @return  self
     */ 
    public function setCta_ciudad($cta_ciudad)
    {
        $this->cta_ciudad = $cta_ciudad;

        return $this;
    }

    public function save()
    {
        // Preparar la consulta para insertar un producto en la BD
        $sql = $this->dbConnection->prepare("INSERT INTO canasta_familiar (cta_codigo,cta_nombre,cta_precio,cta_fecha,cta_ciudad) VALUES (?, ?, ?, NOW(), ?)");

        $cta_codigo = $this->getCta_codigo();
        $cta_nombre = $this->getCta_nombre();
        $cta_precio = $this->getCta_precio();
        
        $cta_ciudad = $this->getCta_ciudad();
       
        $sql->bindParam(1, $cta_codigo);
        $sql->bindParam(2, $cta_nombre);
        $sql->bindParam(3, $cta_precio);
        
        $sql->bindParam(4, $cta_ciudad);
       
        // Excecute
        $sql->execute();

    }
    public function selectedItem()
    {
         try {
        // FETCH_OBJ
        $sql = $this->dbConnection->prepare("SELECT * FROM canasta_familiar where cta_codigo = ".$this->cta_codigo);
        
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
        $sql = $this->dbConnection->prepare("UPDATE canasta_familiar SET cta_nombre=?,cta_precio=?,cta_fecha=NOW(),cta_ciudad=? WHERE cta_codigo=?");
       
        
       
        $cta_nombre = $this->getCta_nombre();
        $cta_precio = $this->getCta_precio();
        
        $cta_ciudad = $this->getCta_ciudad();
        $cta_codigo = $this->getCta_codigo();
       
        
        $sql->bindParam(1, $cta_nombre);
        $sql->bindParam(2, $cta_precio);
        
        $sql->bindParam(4, $cta_ciudad);
        $sql->bindParam(5, $cta_codigo);

        // Excecute
        $sql->execute();
     
       

    }
    public function delete()
    {
        // Preparar la consulta para insertar un producto en la BD
        $sql = $this->dbConnection->prepare("DELETE from canasta_familiar WHERE cta_codigo=?");
        $cta_codigo = $this->getCta_codigo();
        $sql->bindParam(1, $cta_codigo);
        // Excecute
        $sql->execute(); 

    }

   
}

