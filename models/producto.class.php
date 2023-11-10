<?php

class Producto extends BaseModel {
    private $pro_codigo;
    private $pro_nombre;
    private $pro_descripcion;
    private $pro_precio;
    private $pro_estado;
    private $pro_cantidad;
    private $pro_terminos_y_condiciones;
    private $pro_foto;
    

    public function __construct($pro_cod=null, $pro_nom=null, $pro_des=null, $pro_pre=null, $pro_est=null, $pro_can=null, $pro_ter=null, $pro_fot=null ){
        $this->table = "producto"; // tabla asociada en la base de datos
        $this->pro_codigo = $pro_cod;
        $this->pro_nombre = $pro_nom;
        $this->pro_descripcion = $pro_des;
        $this->pro_precio = $pro_pre;
        $this->pro_estado = $pro_est;
        $this->pro_cantidad = $pro_can;
        $this->pro_terminos_y_condiciones = $pro_ter;
        $this->pro_foto = $pro_fot;
        parent::__construct();
    }

     /**
     * Get the value of pro_codigo
     */ 
    public function getPro_codigo()
    {
        return $this->pro_codigo;
    }

    /**
     * Set the value of pro_codigo
     *
     * @return  self
     */ 
    public function setPro_codigo($pro_codigo)
    {
        $this->pro_codigo = $pro_codigo;

        return $this;
    }

    /**
     * Get the value of pro_nombre
     */ 
    public function getPro_nombre()
    {
        return $this->pro_nombre;
    }

    /**
     * Set the value of pro_nombre
     *
     * @return  self
     */ 
    public function setPro_nombre($pro_nombre)
    {
        $this->pro_nombre = $pro_nombre;

        return $this;
    }

    /**
     * Get the value of pro_descripcion
     */ 
    public function getPro_descripcion()
    {
        return $this->pro_descripcion;
    }

    /**
     * Set the value of pro_descripcion
     *
     * @return  self
     */ 
    public function setPro_descripcion($pro_descripcion)
    {
        $this->pro_descripcion = $pro_descripcion;

        return $this;
    }

    /**
     * Get the value of pro_precio
     */ 
    public function getPro_precio()
    {
        return $this->pro_precio;
    }

    /**
     * Set the value of pro_precio
     *
     * @return  self
     */ 
    public function setPro_precio($pro_precio)
    {
        $this->pro_precio = $pro_precio;

        return $this;
    }

    /**
     * Get the value of pro_estado
     */ 
    public function getPro_estado()
    {
        return $this->pro_estado;
    }

    /**
     * Set the value of pro_estado
     *
     * @return  self
     */ 
    public function setPro_estado($pro_estado)
    {
        $this->pro_estado = $pro_estado;

        return $this;
    }

    /**
     * Get the value of pro_cantidad
     */ 
    public function getPro_cantidad()
    {
        return $this->pro_cantidad;
    }

    /**
     * Set the value of pro_cantidad
     *
     * @return  self
     */ 
    public function setPro_cantidad($pro_cantidad)
    {
        $this->pro_cantidad = $pro_cantidad;

        return $this;
    }

    /**
     * Get the value of pro_terminos_y_condiciones
     */ 
    public function getPro_terminos_y_condiciones()
    {
        return $this->pro_terminos_y_condiciones;
    }

    /**
     * Set the value of pro_terminos_y_condiciones
     *
     * @return  self
     */ 
    public function setPro_terminos_y_condiciones($pro_terminos_y_condiciones)
    {
        $this->pro_terminos_y_condiciones = $pro_terminos_y_condiciones;

        return $this;
    }

    /**
     * Get the value of pro_foto
     */ 
    public function getPro_foto()
    {
        return $this->pro_foto;
    }

    /**
     * Set the value of pro_foto
     *
     * @return  self
     */ 
    public function setPro_foto($pro_foto)
    {
        $this->pro_foto = $pro_foto;

        return $this;
    }


    public function save()
    {
        // Preparar la consulta para insertar un producto en la BD
        $sql = $this->dbConnection->prepare("INSERT INTO producto (pro_codigo, pro_nombre, pro_descripcion, pro_precio, pro_estado, pro_cantidad, pro_terminos_y_condiciones, pro_foto) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

        $pro_codigo = $this->getPro_codigo();
        $pro_nombre = $this->getPro_nombre();
        $pro_descripcion = $this->getPro_descripcion();
        $pro_precio = $this->getPro_precio();
        $pro_estado = $this->getPro_estado();
        $pro_cantidad = $this->getPro_cantidad();
        $pro_terminos_y_condiciones = $this->getPro_terminos_y_condiciones();
        $pro_foto = $this->getPro_foto();

        $sql->bindParam(1, $pro_codigo);
        $sql->bindParam(2, $pro_nombre);
        $sql->bindParam(3, $pro_descripcion);
        $sql->bindParam(4, $pro_precio);
        $sql->bindParam(5, $pro_estado);
        $sql->bindParam(6, $pro_cantidad);
        $sql->bindParam(7, $pro_terminos_y_condiciones);
        $sql->bindParam(8, $pro_foto);
        // Excecute
        $sql->execute();

    }
    public function selectedItem()
    {
         try {
        // FETCH_OBJ
        $sql = $this->dbConnection->prepare("SELECT * FROM producto where pro_codigo = ".$this->pro_codigo);
        
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
        $sql = $this->dbConnection->prepare("UPDATE producto SET pro_nombre=?,pro_descripcion=?,pro_precio=?,pro_estado=?,pro_cantidad=?,pro_terminos_y_condiciones=?,pro_foto=? WHERE pro_codigo=?");
       
        
        $pro_nombre = $this->getPro_nombre();
        $pro_descripcion = $this->getPro_descripcion();
        $pro_precio = $this->getPro_precio();
        $pro_estado = $this->getPro_estado();
        $pro_cantidad = $this->getPro_cantidad();
        $pro_terminos_y_condiciones = $this->getPro_terminos_y_condiciones();
        $pro_foto = $this->getPro_foto();
        $pro_codigo = $this->getPro_codigo();

        
        $sql->bindParam(1, $pro_nombre);
        $sql->bindParam(2, $pro_descripcion);
        $sql->bindParam(3, $pro_precio);
        $sql->bindParam(4, $pro_estado);
        $sql->bindParam(5, $pro_cantidad);
        $sql->bindParam(6, $pro_terminos_y_condiciones);
        $sql->bindParam(7, $pro_foto);
        $sql->bindParam(8, $pro_codigo);
        // Excecute
        $sql->execute();
     
       

    }
    public function delete()
    {
        // Preparar la consulta para insertar un producto en la BD
        $sql = $this->dbConnection->prepare("DELETE from producto WHERE pro_codigo=?");
        $pro_codigo = $this->getPro_codigo();
        $sql->bindParam(1, $pro_codigo);
        // Excecute
        $sql->execute(); 

    }

   
}
